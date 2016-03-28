<?php

class Registration2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('registration_model');
    }

    public function index()
    {
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
        $this->load->library('email');
        $this->load->helper('file');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('team_name', 'Име на Екип', 'required');
        $this->form_validation->set_rules('category', 'Категория', 'required');
        $this->form_validation->set_rules('technology', 'Технология', 'required');
        $participants_count = 2;

        for ($i = 2; $i < 5; $i++) {
            if ($this->input->post("first_name[$i]")) {
                $participants_count++;
            }
        }
        for ($i = 0; $i < $participants_count; $i++) {
            $this->form_validation->set_rules("first_name[$i]", 'Име', 'required');
            $this->form_validation->set_rules("last_name[$i]", 'Фамилия', 'required');
            $this->form_validation->set_rules("email[$i]", 'E-Mail', 'required|valid_email|is_unique[members.email]');
            $this->form_validation->set_rules("age[$i]", 'Възраст', 'required|is_natural_no_zero');
            $this->form_validation->set_rules("occupation[$i]", 'Занимание', 'required');
            $this->form_validation->set_rules("tshirt[$i]", 'Размер Тениска', 'required');
        }
        $this->form_validation->set_message('required', 'Това поле не може да е празно!');
        $this->form_validation->set_message('valid_email', 'Моля въведете валиден E-Mail адрес');
        $this->form_validation->set_message('is_unique', 'Този E-Mail вече е въведен');
        $this->form_validation->set_message('is_natural_no_zero', 'Невалидна Възраст');
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $file_name = null;
            if (empty($_FILES['file']['tmp_name']) || $this->do_upload($file_name)) {
                $this->load->model('registration_model');
                $this->registration_model->register($participants_count, $file_name);
                $this->send_email();
                $this->load->view('success');
            } else {
                $this->form_validation->set_message('file', 'Файлът трябва да е jpg / jpeg / png / tif');
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            }
        }
    }

    public function teams()
    {
        $this->load->model('registration_model');
        $data['all_teams'] = $this->registration_model->get_teams();
        $this->load->view('header');
        $this->load->view('teams', $data);
        $this->load->view('footer');
    }

    public function view_team()
    {
        $this->load->model('registration_model');
        $data['one_team'] = $this->registration_model->get_one_team($_GET['id']);
        $this->load->view('header');
        $this->load->view('view_team', $data);
        $this->load->view('footer');
    }

    public function send_email()
    {
        $id_confirmation = sha1($this->input->post('email[0]'));
        $this->email->from('hack-vratsa@vratsasoftware.com');
        $this->email->to($this->input->post('email[0]'));
        $this->email->subject('Потвърждение за участие в Hack Враца 2016');
        $this->email->message("Моля потвърдете участието си на Hack Враца 2016г на следния линк http://hack.vratsa.net/registration2/confirm?id=$id_confirmation");
        $this->email->send();
        echo $this->email->print_debugger();
    }

    public function confirm()
    {
        $id_confirmation = $this->input->get('id', true);
        $this->load->model('registration_model');
        $this->registration_model->check_code($id_confirmation);
        $this->load->view('success_confirm');
    }

    private function do_upload(&$file_name)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|tif';
        $config['max_size'] = 6000;
        $config['max_width'] = 4124;
        $config['max_height'] = 3980;

        $this->load->library('upload', $config);

        if (isset($_FILES['file']['tmp_name'])) {
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                return false;
            } else {
                $file_data = array('upload_data' => $this->upload->data());
                $file_name = $file_data['upload_data']['file_name'];
                //Create image thumb with width = 200px
                $config['image_library'] = 'gd2';
                $config['source_image'] = "uploads/$file_name";
                $config['create_thumb'] = true;
                $config['maintain_ratio'] = true;
                $config['width'] = 200;

                $this->load->library('image_lib', $config);

                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                    return false;
                }
                return true;
            }
        }
        return false;
    }
}
