<?php
class Asiakas_model extends CI_Model {
	public function getAsiakas() {
		$this->db->select('*');
		$this->db->from('asiakas');
		return $this->db->get()->result_array();
	}

	public function addAsiakas($lisaa_data){
		$this->db->insert('asiakas', $lisaa_data);	
		return $this->db->affected_rows();

	}

	public function getValittuAsiakas($id){
		$this->db->select('*');
		$this->db->from('asiakas');
		$this->db->where('id_asiakas', $id);
		return $this->db->get()->result_array();
	}

	public function muokkaaAsiakas($id, $data)
	{
		$this->db->where('id_asiakas', $id);
		$this->db->update('asiakas', $data);
		return $this->db->affected_rows();
		
	}
}