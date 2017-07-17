<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {

        parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->library('session');
    }

	public function index() {
		$this->load->view('landing_page');
	}
}