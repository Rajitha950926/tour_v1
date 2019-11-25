<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');
		$this->load->view('home');
	}
	public function login()
    {
        $this->load->view('login');
    }

    public function Register()
    {
        $this->load->view('register');
    }

    public function Reservation($place_name)
    {
        $this->load->view('reservation',$place_name);
    }

    public function Photo()
    {
        $this->load->view('photo');
    }

    public function About()
    {
        $this->load->view('about');
    }

    public function Contact()
    {
        $this->load->view('contact');
    }

    public function Category()
    {
        $this->load->view('location_cat');
    }

    public function Cart()
    {
        $this->load->view('Cart');
    }

    public function Weather()
    {
        $this->load->view('weather_condition');
    }

    public function Edit()
    {
        $this->load->view('user_profile');
    }
}
