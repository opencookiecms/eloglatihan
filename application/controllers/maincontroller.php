<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maincontroller extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('Mkursus');
    }
    

    public function index()
    {

        $data['getKursus']=$this->Mkursus->getKursus();


        $this->load->view('based/head.php');
        $this->load->view('based/nav.php');
        $this->load->view('based/sidebar.php');
        $this->load->view('pages/dashboard.php',$data);
        $this->load->view('based/footer.php');
        $this->load->view('based/scripts.php');
    }

    public function addKursus()
    {
        $this->form_validation->set_rules('tajukkursus','Tajuk Kursus','required');

        if($this->form_validation->run() === FALSE){

            $this->load->view('based/head.php');
            $this->load->view('based/nav.php');
            $this->load->view('based/sidebar.php');
            $this->load->view('pages/daftar_kursus.php');
            $this->load->view('based/footer.php');
            $this->load->view('based/scripts.php');

        }else{

            $this->Mkursus->kaddProcess();

            $this->session->set_flashdata('success','Action Completed');
            redirect(base_url('')); //redirect last id to another step
        }
        

    }

    public function addUsers()
    {
        $this->form_validation->set_rules('nama','Sila Masukkn Nama','required');

        if($this->form_validation->run() === FALSE){

            $this->load->view('based/head.php');
            $this->load->view('based/nav.php');
            $this->load->view('based/sidebar.php');
            $this->load->view('pages/daftar_user.php');
            $this->load->view('based/footer.php');
            $this->load->view('based/scripts.php');

        }else{

            $this->Mkursus->addUsers();

            $this->session->set_flashdata('success','Action Completed');
            redirect(base_url('users')); //redirect last id to another step
        }
    }

    public function userList()
    {
        $data['getU']=$this->Mkursus->getUsers();


        $this->load->view('based/head.php');
        $this->load->view('based/nav.php');
        $this->load->view('based/sidebar.php');
        $this->load->view('pages/users-list.php',$data);
        $this->load->view('based/footer.php');
        $this->load->view('based/scripts.php');
    }

}

/* End of file maincontroller.php */
