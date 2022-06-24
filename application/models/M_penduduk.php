<?php 

	class M_penduduk extends CI_Model{
	
		public function tampil_data()
	{
		return $this->db->get('tbl_ktp');
	}
	public function getjoin()
	{
			$this->db->select('id_rt');
	$this->db->where('id_rw', $id_rw);
	$this->db->where('nomor_rt', $nomor_rt);
	$q = $this->db->get('ref_rt');
	$data = array_shift($q->result_array());
	$result = $data['id_rt'];	
	return  $result;
	//if id is unique we want just one row to be returned
	}
	public function tampil_kia()
	{
		return $this->db->get('kia');
	}
	public function gettampil()
	{
			$this->db->select('id_rt');
	$this->db->where('id_rw', $id_rw);
	$this->db->where('nomor_rt', $nomor_rt);
	$q = $this->db->get('ref_rt');
	$data = array_shift($q->result_array());
	$result = $data['id_rt'];	
	return  $result;
	//if id is unique we want just one row to be returned
	}
	public function tampil_nikah()
	{
		return $this->db->get('nikah');
	}
	public function gettampilnikah()
	{
			$this->db->select('id_rt');
	$this->db->where('id_rw', $id_rw);
	$this->db->where('nomor_rt', $nomor_rt);
	$q = $this->db->get('ref_rt');
	$data = array_shift($q->result_array());
	$result = $data['id_rt'];	
	return  $result;
	//if id is unique we want just one row to be returned
	}

	public function tambah_kk($data, $table){
		$this->db->insert($table,$data);
	} 
	public function tambah_nikah($data, $table){
		$this->db->insert($table,$data);
	} 

	public function tambah_pindah($data, $table){
		$this->db->insert($table,$data);
	} 
	public function tambah_ktp($data, $table)
	{
		$this->db->insert($table,$data);
	} 
	public function tambah_akte($data, $table)
	{
		$this->db->insert($table,$data);
	} 
	public function tambah_kematian($data, $table)
	{
		$this->db->insert($table,$data);
	} 
	public function tampil_()
	{
		return $this->db->get('tbl_kk');
	}
	public function view()
	{
		return $this->db->get('tbl_aktekelahiran');
	}
	public function tambah_pen($data, $table){
		$this->db->insert($table,$data);
	} 


	public function tampil_penduduk()
	{
		return $this->db->get('tbl_penduduk');
	}
	public function tambah_penduduk()
	{
		return $this->db->get('tbl_penduduk');
	}
	public function tambah_kia()
	{
		return $this->db->get('kia');
	}

	function getPendudukByNIK($id)
	{	
		  return $this->db->get_where('tbl_penduduk',array('NIK' => $id))->row();
	} 
	public function awal()
	{
		return $this->db->get('tbl_penduduk');
	}

	public function out()
	{
		return $this->db->get('tbl_kematian');
	}
	public function gettampilkematian()
	{
			$this->db->select('id_rt');
	$this->db->where('id_rw', $id_rw);
	$this->db->where('nomor_rt', $nomor_rt);
	$q = $this->db->get('ref_rt');
	$data = array_shift($q->result_array());
	$result = $data['id_rt'];	
	return  $result;
	//if id is unique we want just one row to be returned
	}


}



?>
