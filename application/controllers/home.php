<?php

class Home extends CI_Controller
{


	public function index()
	{
		$this->homePage();
	}
	public function homePage()
	{
		$this->load->view('home');

	}
}