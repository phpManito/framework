<?php
defined('BASEPATH') OR eit('No direct script access allowed');

class Itcast extends CI_Controller
{
    public function index()
    {
        echo 666;
        $this->load->view('welcome_message');
    }

    public function test()
    {
        echo 888;
    }
}