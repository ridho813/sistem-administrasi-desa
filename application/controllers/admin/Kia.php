<?php 

	class Kia extends CI_Controller{

		public function index()
		{
			$data['kia']=$this->M_penduduk->tampil_kia()->result();

			$this->load->view('back/header');
			$this->load->view('admin/kia', $data);
			$this->load->view('back/footer');


		}

		public function detail()
		{
		$data['kia'] = $this->M_penduduk->gettampil($id);
			$this->load->view('back/header');
			$this->load->view('admin/kia', $data);
			$this->load->view('back/footer');
	
  
		}
  

    
	}
 ?>
