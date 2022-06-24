<?php 

	class Login extends CI_Controller{

		function __construct()
		{
			parent::__construct();
			$this->load->model('M_mhs');
		}
		public function index()
		{
			if($this->session->userdata('logined') && $this->session->userdata('logined') == true) //jika ada session maka akan ke home
			{
				redirect('awalan');
			}
			
			if(!$this->input->post()) //jika tidak ada input data post maka akan ke halaman login
			{
				$this->load->view('penduduk/login');
			}
			else
			{
				$cek_login = $this->M_mhs->auth(
					$this->input->post('nik')
					//$this->input->post('password')
					);
				if(!empty($cek_login))
				{
					$this->session->set_userdata('nik',$cek_login->nik);
					$this->session->set_userdata('logined',true);				
					redirect("awalan");
				}
				else 
				{
					redirect("login");
				}
			} } 


			public function logout()
			{
				$this->session->sess_destroy();//hapus session userdata
				redirect("home");
			} 
	}
    
	
 ?>
