<?php

class Settings extends CI_Controller {

        public function index()
        {
        	if (!$_SESSION['logged_in'] === true) {
        		redirect('/');
        	}
                $this->load->view('settings');
        }
}