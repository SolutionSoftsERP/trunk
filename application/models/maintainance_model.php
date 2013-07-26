<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Maintainance_Model extends CI_Model 
{
	public function setMaintainance() 
	{		
			$data = array(
			'vehicle_id'	                      =>	$this->input->post('vehicle_id'),
			'engine_oil_change_date'  =>	$this->input->post('engine_oil_change_date'),
			'tyres_change_date'  	      =>	$this->input->post('tyres_change_date'),	
			'gear_box_change_date'	  =>	$this->input->post('gear_box_change_date'),
			'battery_change_date'		      =>	$this->input->post('battery_change_date'), 
			'brakes_change_date'	      =>	$this->input->post('brakes_change_date'),		
			'engine_oil_cost'			=>	$this->input->post('engine_oil_cost'),
			'tyres_cost'		=>	$this->input->post('tyres_cost'),
			'gear_box_cost'			=>	$this->input->post('gear_box_cost'),
			'battery_cost'		=>	$this->input->post('battery_cost'),
			'brakes_cost'		=>	$this->input->post('brakes_cost'),
			'servicing_date'		=>	$this->input->post('servicing_date'),
			'servicing_cost'		=>	$this->input->post('servicing_cost'),
			'description'		=>	$this->input->post('description'),
			'create_date'=> date("Y/m/d"),
			);
			if($this->input->post('maintainance')){
			$query = $this->db->insert('vehicle_maintainance',$data);
			
			
			if($query){
			$last_user_id = $this->db->insert_id();
			return $last_user_id;
			} else{
			return false;
			}
		}
	}

	public function getAllMaintainance()
	{
		$this->load->database();	
		$query = $this->db->get('vehicle_maintainance');
				
		return $query->result_array();
	}

	
		public function getAll($limit, $start){
			
			$this->db->limit($limit, $start);
			$query = $this->db->get("vehicle_maintainance");

			if ($query->num_rows() > 0)
			{ 
					return $query->result_array();
			}
			else {return NULL;}

		    } 
			public function record_count() {

			return $this->db->count_all("vehicle_maintainance");

		    }

		public function getMaintainance($id)
		{
		$this->load->database();
				$query = $this->db->query("select * from vehicle_maintainance where id = $id");
  
        if ($query->num_rows() > 0)
        { 
			return $query->row_array();
        }
        else {return NULL;}
     
		}
		public function updateMaintainance()
		{
			$this->load->database();
		$data = array(
			'vehicle_id'	                      =>	$this->input->post('vehicle_id'),
			'engine_oil_change_date'  =>	$this->input->post('engine_oil_change_date'),
			'tyres_change_date'  	      =>	$this->input->post('tyres_change_date'),	
			'gear_box_change_date'	  =>	$this->input->post('gear_box_change_date'),
			'battery_change_date'		  =>	$this->input->post('battery_change_date'), 
			'brakes_change_date'	      =>	$this->input->post('brakes_change_date'),		
			'engine_oil_cost'			      =>	$this->input->post('engine_oil_cost'),
			'tyres_cost'		                  =>	$this->input->post('tyres_cost'),
			'gear_box_cost'			      =>	$this->input->post('gear_box_cost'),
			'battery_cost'		              =>	$this->input->post('battery_cost'),
			'brakes_cost'	               	=>	$this->input->post('brakes_cost'),
			'servicing_date'		        =>	$this->input->post('servicing_date'),
			'servicing_cost'		       =>	$this->input->post('servicing_cost'),
			'description'		               =>	$this->input->post('description'),
			);
		 
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('vehicle_maintainance',$data); 		
		
		}
}
?>
