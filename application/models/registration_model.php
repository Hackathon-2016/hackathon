<?php
class registration_model extends CI_Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_occupations()
    {
        $this->db->select('occupation');
        $this->db->from('occupation');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $occupation_data[] = $row;
            }
        }
        return $occupation_data;
    }

    public function get_technologies()
    {
        $this->db->select('technology');
        $this->db->from('technologies');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $technology_data[] = $row;
            }
        }
        return $technology_data;
    }

    public function get_categories()
    {
        $this->db->select('category');
        $this->db->from('categories');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $category_data[] = $row;
            }
        }
        return $category_data;
    }

    public function get_tshirt()
    {
        $this->db->select('tshirt_size');
        $this->db->from('tshirts');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $tshirt_data[] = $row;
            }
        }
        return $tshirt_data;
    }

    public function register()
    {
        $data = array(
            'team_name' => $this->input->post('team_name'),
            'category' => $this->input->post('category'),
            'technologies' => $this->input->post('technology'),
            'team_moto' => $this->input->post('team_moto'),
            'inspiration' => $this->input->post('inspiration'),
            'code' => sha1($this->input->post('email1')),
        );

        $data2 = array(
            'team' => $this->db->insert_id(),
            'captain' => 1,
            'first_name' => $this->input->post('first_name1'),
            'last_name' => $this->input->post('last_name1'),
            'email' => $this->input->post('email1'),
            'age' => $this->input->post('age1'),
            'occupation' => $this->input->post('occupation1'),
            'tshirt' => $this->input->post('tshirt1'),
            'first_name' => $this->input->post('first_name2'),
            'last_name' => $this->input->post('last_name2'),
            'email' => $this->input->post('email2'),
            'age' => $this->input->post('age2'),
            'occupation' => $this->input->post('occupation2'),
            'tshirt' => $this->input->post('tshirt2'),
        );
        $this->db->insert('teams', $data);
        $this->db->insert('members', $data2);
    }
}
