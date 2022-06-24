<?php 

	class Aktekel extends CI_Controller{

		public function index()
		{
			$data['akte']=$this->M_penduduk->view()->result();

			$this->load->view('back/header');
			$this->load->view('admin/aktakel', $data);
			$this->load->view('back/footer');


		}
	
  

  

    
	}
 ?>
