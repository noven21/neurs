<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calendar extends CI_Controller {

		function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        $this->load->model('calendarModel');
    }


	/*Home page Calendar view  */
	Public function index()
	{
		$this->load->view('homepage');
	}

	/*Get all Events */

	Public function getEvents()
	{
		$result=$this->calendarModel->getEvents();
		echo json_encode($result);
	}



}
