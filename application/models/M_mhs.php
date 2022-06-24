<?php 


  class M_mhs extends CI_Model {
    public function get_data()
  {
      return $this->db->get('tbl_penduduk')->result_array();
  }
	function auth($nik)
	{
		$this->db->where('nik',$nik);
		//$this->db->where('password',$password);
		return $this->db->get('tbl_penduduk')->row();
	}



} 



?>
