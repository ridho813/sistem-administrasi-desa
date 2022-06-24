<?php 

	class Kartu extends CI_Controller{

		public function index()
		{
			$data['kk']=$this->M_penduduk->tampil_()->result();

			$this->load->view('back/header');
			$this->load->view('admin/kartu', $data);
			$this->load->view('back/footer');


		}

		public function detail()
		{
		$data['kk'] = $this->M_penduduk->getjoin($id);
			$this->load->view('back/header');
			$this->load->view('admin/kartu', $data);
			$this->load->view('back/footer');
	
  
		}
  

    
	}
 ?>
