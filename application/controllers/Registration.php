<?php

class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('registration_model');
    }

    public function index()
    {
        $this->output->enable_profiler(true);
        $this->load->model('registration_model');
        $data['occupation'] = $this->registration_model->get_occupations();
        $data['technology'] = $this->registration_model->get_technologies();
        $data['category'] = $this->registration_model->get_categories();
        $data['tshirt'] = $this->registration_model->get_tshirt();
        $this->load->view('header');
        $this->load->view('registration_view', $data);
        $this->load->view('footer');
    }

    public function register_team()
    {
        $this->output->enable_profiler(true);
        $this->load->helper('file');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('team_name', 'Име на Екип', 'required');
        $this->form_validation->set_rules('category', 'Категория', 'required');
        $this->form_validation->set_rules('technology', 'Технология', 'required');
        $count = count($this->input->post("first_name[]"));
        for ($i = 0; $i < $count; $i++) {
            $this->form_validation->set_rules("first_name[$i]", 'Име', 'required');
            $this->form_validation->set_rules("last_name[$i]", 'Фамилия', 'required');
            $this->form_validation->set_rules("email[$i]", 'E-Mail', 'required|valid_email|is_unique[members.email]');
            $this->form_validation->set_rules("age[$i]", 'Възраст', 'required|is_natural_no_zero');
            $this->form_validation->set_rules("occupation[$i]", 'Занимание', 'required');
            $this->form_validation->set_rules("tshirt[$i]", 'Размер Тениска', 'required');
        }

        // $this->form_validation->set_rules('first_name2', 'Име', 'required');
        // $this->form_validation->set_rules('last_name2', 'Фамилия', 'required');
        // $this->form_validation->set_rules('email2', 'E-Mail', 'required|valid_email|is_unique[members.email]');
        // $this->form_validation->set_rules('age2', 'Възраст', 'required|is_natural_no_zero');
        // $this->form_validation->set_rules('occupation2', 'Занимание', 'required');
        // $this->form_validation->set_rules('tshirt2', 'Размер Тениска', 'required');
        /*
        $this->form_validation->set_rules('first_name3', 'Име', 'required');
        $this->form_validation->set_rules('last_name3', 'Фамилия', 'required');
        $this->form_validation->set_rules('email3', 'E-Mail', 'required|valid_email|is_unique[members.email]');
        $this->form_validation->set_rules('age3', 'Възраст', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('occupation3', 'Занимание', 'required');
        $this->form_validation->set_rules('tshirt3', 'Размер Тениска', 'required');
        $this->form_validation->set_rules('first_name4', 'Име', 'required');
        $this->form_validation->set_rules('last_name4', 'Фамилия', 'required');
        $this->form_validation->set_rules('email4', 'E-Mail', 'required|valid_email|is_unique[members.email]');
        $this->form_validation->set_rules('age4', 'Възраст', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('occupation4', 'Занимание', 'required');
        $this->form_validation->set_rules('tshirt4', 'Размер Тениска', 'required');
        $this->form_validation->set_rules('first_name5', 'Име', 'required');
        $this->form_validation->set_rules('last_name5', 'Фамилия', 'required');
        $this->form_validation->set_rules('email5', 'E-Mail', 'required|valid_email|is_unique[members.email]');
        $this->form_validation->set_rules('age5', 'Възраст', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('occupation5', 'Занимание', 'required');
        $this->form_validation->set_rules('tshirt5', 'Размер Тениска', 'required');
         */
        $this->form_validation->set_message('required', 'Това поле не може да е празно!');
        $this->form_validation->set_message('valid_email', 'Моля въведете валиден E-Mail адрес');
        $this->form_validation->set_message('is_unique', 'Този E-Mail вече е въведен');
        $this->form_validation->set_message('is_natural_no_zero', 'Невалидна Възраст');
        if ($this->form_validation->run() == false) {
            /*
            $this->load->model('registration_model');
            $data['occupation'] = $this->registration_model->get_occupations();
            $data['technology'] = $this->registration_model->get_technologies();
            $data['category'] = $this->registration_model->get_categories();
            $data['tshirt'] = $this->registration_model->get_tshirt();
            $this->load->view('header');
            $this->load->view('registration_view', $data);
            $this->load->view('footer');
             */
            $this->index();
        } else {
            $this->load->model('registration_model');
            $this->registration_model->register();
        }
    }

    // public function do_upload()
    // {
    //     $config['upload_path'] = './uploads/';
    //     $config['allowed_types'] = 'gif|jpg|jpeg|png';
    //     //$config['max_size']             = 500;
    //     //$config['max_width']            = 1024;
    //     //$config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('upload')) {
    //         $error = array('error' => $this->upload->display_errors());
    //         return $error;
    //     } else {
    //         $data = array('upload_data' => $this->upload->data());
    //         $upload_data = $this->upload->data();
    //         $file_name = $upload_data['file_name'];
    //         $this->registration_model->register($file_name);
    //     }
    // }
}
