<?php 

	class Dashboard extends CI_Controller{

		public function index()
		{
			//$data['Mahasiswa']=$this->M_mahasiswa->tampil_data()->result();

			$this->load->view('back/header');
		
			$this->load->view('back/footer');


		}
	
  

  

    
	}
 ?>
