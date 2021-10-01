<?php
class M_main extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('m_main');
		$this->load->library('session');

	}
	
	function getapp1($table){
		
		
		$this->db->where("( STATUS='UPL' OR STATUS='APV' OR STATUS='STBAP' OR STATUS='SK'  )");

		return $query = $this->db->get($table)->result();
	}
	
	function getstbap($table){
		
		
		$this->db->where("(STATUS='APV' or STATUS='STBAP' )");

		return $query = $this->db->get($table)->result();
	}
	function getsurvei($table){
		
		
		$this->db->where("(STATUS='STBAP' OR STATUS='SK' OR STATUS='BSL' )");

		return $query = $this->db->get($table)->result();
	}
	function getsk($table){
		
		
		$this->db->where("(STATUS='SK' OR STATUS='SKK'  )");

		return $query = $this->db->get($table)->result();
	}

	function getwhere($table,$where){
		$this->db->where($where);
		return $query = $this->db->get($table)->result();
	}
	function getst($table,$where,$tes){
		$this->db->where($where);
		$this->db->where($tes);
		return $query = $this->db->get($table)->result();
	}
	
	function get1data($table,$where){
		$this->db->where($where);
		return $query = $this->db->get($table)->result();
	}
	function update($where,$dataup,$table){
		$this->db->where($where);
		$this->db->update($table,$dataup);
	}
	function insert($table,$datain){
		$result= $this->db->insert($table,$datain);
	    return $result;
	}
	function cekada($table,$where){
		return $this->db->get_where($table,$where);
	}
	function getlist($table){

		return $query = $this->db->get($table)->result();

	}
}
