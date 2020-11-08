
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkursus extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getKursus()
    {
        $this->db->select('*');
        $this->db->from('kursus');
        $query = $this->db->get();

        return $query->result();
    }

    public function kaddProcess()
    {
        $data = array(

            'tajukkursus'=>$this->input->post('tajukkursus'),
            'tmula'=>$this->input->post('tmula'),
            'takhir'=>$this->input->post('takhir'),
            'tempat'=>$this->input->post('tempat'),
            'tahun'=>$this->input->post('tahun'),
            'hari'=>$this->input->post('hari')
        );

        return $this->db->insert('kursus',$data);
    }

    public function addUsers($data='')
    {
        $data = array(

            'nobadan'=>$this->input->post('nobadan'),
            'gambar'=>$data,
            'nama'=>$this->input->post('nama'),
            'nokp'=>$this->input->post('nokp'),
            'jawatan'=>$this->input->post('jawatan'),
            'gredjawatan'=>$this->input->post('gredjawatan'),
            'unitsokongan'=>$this->input->post('unitsokongan'),
            'groupUnit'=>$this->input->post('groupUnit')

        );

        return $this->db->insert('usersbomba',$data);
    }

    public function getUsers()
    {
        $this->db->select('*');
        $this->db->from('usersbomba');
        $query = $this->db->get();

        return $query->result();
    }

    public function getUsersbyid($id)
    {
        $this->db->select('*');
        $this->db->from('usersbomba');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->result();
    }

    public function updateuserp($data="", $context, $id)
    {
        $context = array(

            'nobadan'=>$this->input->post('nobadan'),
            'gambar'=>$data,
            'nama'=>$this->input->post('nama'),
            'nokp'=>$this->input->post('nokp'),
            'jawatan'=>$this->input->post('jawatan'),
            'gredjawatan'=>$this->input->post('gredjawatan'),
            'unitsokongan'=>$this->input->post('unitsokongan'),
            'groupUnit'=>$this->input->post('groupUnit')

        );

        $this->db->where('id', $id);
        $this->db->update('usersbomba',$context);
      
    }
    

}

/* End of file Mkursus.php */
