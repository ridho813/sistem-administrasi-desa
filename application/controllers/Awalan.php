<?php 

	class Awalan extends CI_Controller{

		public function index()
		{
			$data['penduduk']=$this->M_penduduk->awal()->result();

			$this->load->view('Tamplates/Header');
			$this->load->view('Tamplates/menu');
			$this->load->view('master',$data);
			$this->load->view('Tamplates/Footer');


		}


	
  

  

    
	}
 ?>
