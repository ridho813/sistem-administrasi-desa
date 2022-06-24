<?php 

	class Kematian extends CI_Controller{

		public function index()
		{
			$data['kematian']=$this->M_penduduk->out()->result();

			$this->load->view('back/header');
			$this->load->view('admin/kematian', $data);
			$this->load->view('back/footer');


		}

		public function detail()
		{
		$data['kematian'] = $this->M_penduduk->gettampilkematian($id);
			$this->load->view('back/header');
			$this->load->view('admin/kematian', $data);
			$this->load->view('back/footer');
	
  
		}
  

    
	}
 ?>
