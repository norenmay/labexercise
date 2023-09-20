<?php
class Allmodel extends CI_Model {


    //so ito yung tinutukoy ko
    //kung makikita mo sa FetchData merong nka declare na dalwang variable yung table at where
    //yan yung mag hahandle ng mga value na ipapasa mo sa kanya
    //since meron akong pinasa dun na value ganito ang meaning nya
    //ok next tayo
    public function FetchData($table,$where)
	{
        //ito yung query builder ng codeigniter
        //kung mapapansin mo hd familiar sa inyu kase iba ang decleration ng query nya
        //pero parehas lng sila mas shortcut nga lng tingnan
        
		$this->db->select('*');//ito yung select
		$this->db->from($table);//then from table name
		$this->db->where($where);//where if meron kabang i filter like WHERE id = 1
		$query = $this->db->get();//ito sya iipunan nya lahat ng results base dun sa SELECT mo
		$data = $query->result_array();//ito sya katumbas nya nito is yung mysqli_fetch_array()
		return $data;//ito sya ireturn nya para ma display mo na sa view mo

        //itong query na nka sulat jan ito yung katumbas nya
        //SELECT * FROM information WHERE 
        //ganyan yang katumbas nyan
	}

}