<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		//dito ko dineclare yung model at ganito ang syntax nya para mag load ng model
		$this->load->model("Allmodel");
	}

	public function index()
	{
		$data["display"] = $this->Allmodel->FetchData("information",array());
		$this->load->view('form_view',$data);

	}

	public function save()
	{
		$this->form_validation->set_rules('studnum', 'Student Number', 'required');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		
		if($this->form_validation->run())
		{
			$data = array(
				"student_number"   => $this->input->post("studnum"),
				"firstname" => $this ->input->post("fname"),
				"middlename"  => $this->input->post("mname"),
				"lastname"    => $this->input->post("lname"),
			);

			$this->db->insert("information",$data);
			redirect("/");
		}
		else
		{
			//ito yung false
			//other wise dito sya mag fall gets m na?
			//pag click ko ng save dito sya nag fall kase required lahat ang textbox
			//kung nakita mo nawala yung red sa firstname kase nag input ako ng ryan dun
			$this->index();
		}
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data["info"] = $this->Allmodel->FetchData("information",array("id"=>$id));
		$this->load->view("update_view",$data);
	}

	public function save_update()
	{
		$this->form_validation->set_rules('studnum', 'Student Number', 'required');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');

		if($this->form_validation->run())
		{
			$id = $this->uri->segment(3);

			$data = array(
				"student_number"   => $this->input->post("studnum"),
				"firstname"    	   => $this ->input->post("fname"),
				"middlename"       => $this->input->post("mname"),
				"lastname"         => $this->input->post("lname"),
			);

			$this->db->where("id",$id);
			$this->db->update("information",$data);
			redirect("/");
		}
		else
		{
			//ito yung false
			//other wise dito sya mag fall gets m na?
			//pag click ko ng save dito sya nag fall kase required lahat ang textbox
			//kung nakita mo nawala yung red sa firstname kase nag input ako ng ryan dun
			$this->update();
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where("id",$id);
		$this->db->delete('information');
		redirect("/");
	}
}
	
