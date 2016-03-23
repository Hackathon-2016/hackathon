<?php
/**
 * User: mivanchev
 * Date: 02-Feb-16
 * Time: 22:26
 * Start by going to <your_hostname>/hackaton/home
 */

class Index extends CI_Controller
{

    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
}
