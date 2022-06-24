<?php 

	class Home extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('M_penduduk')); 
		}
		public function index()
		{
			//$data['Mahasiswa']=$this->M_mahasiswa->tampil_data()->result();

			$this->load->view('Tamplates/Header');
			$this->load->view('Tamplates/Sidebar');
			$this->load->view('home');
			$this->load->view('Tamplates/Footer');


		}

		public function awal()
		{
		 $data['penduduk']=$this->M_penduduk->tampil_data()->result();

			$this->load->view('Tamplates/Header');
			$this->load->view('Tamplates/Sidebar');
			$this->load->view('master');
			$this->load->view('Tamplates/Footer');


		}
	
  

  

    
	}
 ?>
