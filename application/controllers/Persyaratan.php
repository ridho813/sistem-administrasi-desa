<?php 

	class Persyaratan extends CI_Controller{

		public function index()
		{
			//$data['Mahasiswa']=$this->M_mahasiswa->tampil_data()->result();

			$this->load->view('Tamplates/Header');
			$this->load->view('Tamplates/Sidebar');
			$this->load->view('persyaratan');
			$this->load->view('Tamplates/Footer');


		}
	
  

  

    
	}
 ?>
