<?php
class Allmodel extends CI_Model {

    public function FetchData($table,$where)
	{
        
        
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		$data = $query->result_array();
		return $data;

	}

}