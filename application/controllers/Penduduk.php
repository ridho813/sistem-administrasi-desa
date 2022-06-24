<?php 

	class Penduduk extends CI_Controller{

		public function index()
		{
			//$data['Mahasiswa']=$this->M_mahasiswa->tampil_data()->result();
			//$this->form_validation->set_rules('nik','nik','required',['required'	=> 'NIK wajib di isi !']);
			$this->form_validation->set_rules('captcha', 'Captcha', 'trim|callback_chaptcha|required' );
			if ($this->form_validation->run() == false ){
			$this->load->view('Tamplates/Header');
			$this->load->view('Tamplates/Sidebar');
			$this->load->view('penduduk/v_tambah', array('img' => $this->create_captcha()));
			$this->load->view('Tamplates/Footer');
			}
			else{
				echo 'Success Captcha COde';
			}
		}
		public function create_captcha(){
			$options = array(
				'img_path'=> './captcha/',
				'img_url'=> base_url('captcha'),
				'img_widht'=> '150',
				'img_height'=> '30',
				'expiration'=> 7200

			);
			$cap = create_captcha($options);
			$image = $cap['image'];

			$this->session-> set_userdata('captchaword', $cap['word'] );
			return $image;
		}
	
		public function check_captcha(){
			if($this->input->post('chaptcha')== $this->session->userdata('captchaword'))
			{
				return true;
			} 
			else {
				$this->form_validation->set_massage('check_chaptcha','Chaptcha is wrong' );
				{
					return false;
				}
			}
		}

		public function login()
		{
			$this->form_validation->set_rules('nik','NIK',[''	=> 'NIK wajib di isi !']);
		//	$this->form_validation->set_rules('password','Password','required',['required'	=> 'Password wajib di isi !']);
			if($this->form_validation->run() ==FALSE)
			{
				//$this->load->view('templates/header');
				$this->load->view('penduduk/v_tambah');
				//$this->load->view('templates/footer');
			}else{
				$auth = $this->M_penduduk->cek_login();
				if($auth == FALSE)
				{
					$this->session->set_flashdata('pesan','<div	class="alert alert-danger alert-dismissible fade show" role="alert">
						  Username atau Password Anda Salah!
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>');
					redirect('Auth/login');
				}else{
					$this->session->set_userdata('nik',$auth->nik);
					$this->session->set_userdata('id_penduduk',$auth->id_penduduk);
				switch ($auth->role_id) {
					case 1 : redirect('home');
						# code...
						break;
					
					case 2 : redirect('penduduk');
						# code...
						break;
						default: break;
				}
			}
		}
	}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('Auth/login');
		}

		public function tambah_aksi()
		{
	
			$nama			= $this->input->post('nama');
			$nik			= $this->input->post('nik');
			$tempat_lahir				= $this->input->post('tempat_lahir');
			$tanggal_lahir			= $this->input->post('tanggal_lahir');
			$no_telp		= $this->input->post('no_telp');
			$id_rt			= $this->input->post('id_rt');
			$id_rw			= $this->input->post('id_rw');
			$id_dusun			= $this->input->post('id_dusun');
			$pendidikan			= $this->input->post('pendidikan');
			$agama			= $this->input->post('agama');
			$goldar			= $this->input->post('goldar');
			$jen_kel			= $this->input->post('jen_kel');
			$pekerjaan			= $this->input->post('pekerjaan');
			$status_kawin			= $this->input->post('status_kawin');
			$status_penduduk			= $this->input->post('status_penduduk');
		
			$data = array(
				'nama' 		=>$nama,
				'nik'		=> $nik,
				'no_tlp' 		=>$no_tlp,
				'dusun'=> $dusun,
				'id_rw'	=> $id_rw,
				'id_rt'	=> $id_rt,
				'pendidikan'		=> $pendidikan,
				'agama'	=> $agama,
				'goldar'	=> $goldar,
				'jen_kel'	=> $jen_kel,
				'pekerjaan'	=> $pekerjaan,
				'status_kawin'	=> $status_kawin,
				'status_penduduk'	=> $status_penduduk
				
			);
	
			$this->M_penduduk->tambah_penduduk($data, 'tbl_penduduk');
			$this->session->set_flashdata('sukses','Data KK berhasil di tambahkan<br>Terimakasih');
			redirect('admin/Penduduk');
		}

	}
	?>

    