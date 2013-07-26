<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Distance_Model extends CI_Model {


	public function setDistance() 
	{
			$data = array(
			'from'	   =>	$this->input->post('from'),
			'to'	   =>	$this->input->post('to'),
			'distance'  =>	$this->input->post('distance'),	
			'create_date'=> date("Y/m/d"),
			);
			$query = $this->db->insert('distance_master',$data);
			
			
			if($query){
			$last_user_id = $this->db->insert_id();
			return $last_user_id;
			} else{
			return false;
			}
	}

	public function get_distance()
	{
				$this->load->database();	
				$query = $this->db->get('distance_master');
				return $query->result_array();
	}

	public function get_dist($id)
	{			
				$this->load->database();
				$query = $this->db->query("select * from distance_master where id = $id");
  
        if ($query->num_rows() > 0)
        { 
			return $query->row_array();
        }
        else {return NULL;}
     
	} 

	public function updateDistance(){

		$this->load->database();
		$data = array(
			'from'	=>	$this->input->post('from'),
			'to'		=>	$this->input->post('to'),	
			'distance'		=>	$this->input->post('distance'),	
			'create_date' => date('y-m-d'),
			);
		 
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('distance_master',$data); 		
		
					}
}