<?php

class Home extends CI_Controller {

	public function index() {
		$data['content'] = 'home';
		$this->load->view('template', $data);
	}

	public function hackathons() {
		$data['content'] = 'hackathons';
		$this->load->view('template', $data);
	}

	public function faq() {
		$data['content'] = 'faq';
		$this->load->view('template', $data);
	}

	public function program() {
		$data['content'] = 'program';
		$this->load->view('template', $data);
	}

	public function rules() {
		$data['content'] = 'rules';
		$this->load->view('template', $data);
	}

	public function partners() {
		$data['content'] = 'partners';
		$this->load->view('column_template', $data);
	}
	
	public function registration() {
		$data['content'] = 'registration';
		$this->load->view('template', $data);
	}
	
	public function contacts() {
		$data['content'] = 'contacts';
		$this->load->view('template', $data);
	}
}