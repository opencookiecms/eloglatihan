<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Maincontroller extends CI_Controller {
    
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

    public function kursus($id="")
    {
        $data = array(
            'getkursusbyid'=>$this->Mkursus->getkbyid($id),
        );

        $this->load->view('based/head.php');
        $this->load->view('based/nav.php');
        $this->load->view('based/sidebar.php');
        $this->load->view('pages/kursus.php',$data);
        $this->load->view('based/footer.php');
        $this->load->view('based/scripts.php');
    }

    public function add_user_kursus()
    {
        $data = array(
            'getU'=>$this->Mkursus->getUsers(),
        );

        $this->load->view('based/head.php');
        $this->load->view('based/nav.php');
        $this->load->view('based/sidebar.php');
        $this->load->view('pages/add_user_kursus.php',$data);
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

            $config['upload_path'] ='./assets/userimage/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '10000';
            $config['max_width'] = '30000';
            $config['max_height'] = '30000';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file')){

                $data = 'default.jpg';
				$this->Mkursus->addUsers($data);
				//redirect(base_url()."mrk/successmsg"./$lass); //redirect last id to another step
				$this->session->set_flashdata('success','Action Completed');
                //redirect(base_url('kontraktor')); //redirect last id to another step
                echo $this->upload->do_upload('profile_image');

                $errors = array('error' => $this->upload->display_errors());
                print_r($errors);
            }else{

                $dataupload = $this->upload->data();
				$data = $dataupload['file_name'];
                $this->Mkursus->addUsers($data);
                $this->session->set_flashdata('success','Action Completed');
                redirect(base_url('users')); //redirect last id to another step
            }
    
        }
    }

    public function updateUser($id='')
    {
        $context = array(
            'getuser'=>$this->Mkursus->getUsersbyid($id),
            'hello'=> 'hedffdfdflllo',
            'id' => $id,
        );

        $this->form_validation->set_rules('nama','Sila Masukkn Nama','required');
		$id = $this->input->post('hiddenid');
		$hpic = $this->input->post('hiddenpic');
		if($this->form_validation->run() === FALSE){

            $this->load->view('based/head.php');
            $this->load->view('based/nav.php');
            $this->load->view('based/sidebar.php');
            $this->load->view('pages/update_user.php',$context);
            $this->load->view('based/footer.php');
            $this->load->view('based/scripts.php');

		}else{

			$config['upload_path'] ='./assets/userimage/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '10000';
			$config['max_width'] = '30000';
			$config['max_height'] = '30000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('file')){
							
				$this->Mkursus->updateuserp($hpic, $context, $id);
				//redirect(base_url('kontraktor-update/'.$id)); //redirect last id to another step

			}else{
				$dataupload = $this->upload->data();
				$data = $dataupload['file_name'];

				$this->Mkursus->updateuserp($data, $context, $id);
				//redirect(base_url('kontraktor-update/'.$id)); //redirect last id to another step
			}
			 
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
