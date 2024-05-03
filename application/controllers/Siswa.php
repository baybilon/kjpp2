<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {

		$data['get_siswa'] = $this->MdlSiswa->get_siswa();
		$data['app'] = 'siswa_management';
		// print_r($data); exit();
		$this->load->view('index',$data);

	}

	public function register_siswa() {
    
		// $data['get_mhs'] = $this->MdlMhs->get_mhs();
		$data['app'] = 'form_add_siswa';
		$this->load->view('index',$data);

	}

	public function add_siswa(){
        $nama_siswa = $this->input->post('nama_siswa');
        $no_telepon = $this->input->post('no_telepon');
        $alamat_rumah = $this->input->post('alamat_rumah');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $mata_pelajaran = $this->input->post('mata_pelajaran');
        $ekskul = $this->input->post('ekskul');


        $data = array(
            'nama_siswa' => $nama_siswa,
            'no_telepon' => $no_telepon,
            'alamat_rumah' => $alamat_rumah,
            'jenis_kelamin' => $jenis_kelamin
            'mata_pelajaran' => implode(";",$mata_pelajaran),,
            'ekskul' => implode(";",$ekskul),
        );
        // print_r($data); exit();
        $this->db->insert('siswa', $data);
        redirect("");
    }
			
}
		
		
