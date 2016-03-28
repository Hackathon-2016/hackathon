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

    public function register($participants_count, $file_name)
    {
        $data = array(
            'team_name' => $this->input->post('team_name'),
            'category' => $this->input->post('category'),
            'technologies' => $this->input->post('technology'),
            'team_moto' => $this->input->post('team_moto'),
            'inspiration' => $this->input->post('inspiration'),
            'code' => sha1($this->input->post("email[0]")),
            'team_logo' => $file_name,
        );
        //The insert MUST be befot the $this->db->insert_id()! And also is better is to be here because
        //it is close to the corresponding $data.
        $this->db->insert('teams', $data);
        $team_id = $this->db->insert_id();
        $data2 = array();
        for ($i = 0; $i < $participants_count; $i++) {
            $data2[$i] = array(
                'first_name' => $this->input->post("first_name[$i]"),
                'last_name' => $this->input->post("last_name[$i]"),
                'age' => $this->input->post("age[$i]"),
                'email' => $this->input->post("email[$i]"),
                'occupation' => $this->input->post("occupation[$i]"),
                'tshirt' => $this->input->post("tshirt[$i]"),
                'team' => $team_id,
                'is_captain' => null,
            );
        }
        $data2[0]['is_captain'] = 1; //The first member is captain
        $this->db->insert_batch('members', $data2);
    }

    public function get_teams()
    {
        $this->db->from('teams');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_one_team($id)
    {
        $this->db->from('members');
        $this->db->where('team', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function check_code($id_confirmation)
    {
        $this->db->set('is_confirmed', 1);
        $this->db->where('code', $id_confirmation);
        $this->db->update('teams');
    }
}
