<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vehicle_Model extends CI_Model {

	/****************************************
		## ADD NEW VEHICLE 
	******************************************/

	function add_vehicle() 
	{
			$vehicle_data = array(
			'vehicle_no'	=>	$this->input->post('vehicle_no'),
			'vehicle_type'	=>$this->input->post('vehicle_type'),
			'make_year'		=>	$this->input->post('make_year'),	
			'color'		=>	$this->input->post('color'),	
			'chasis_no'	=>	$this->input->post('chasis_no'),
			'vehicle_ownership'		=>	$this->input->post('vehicle_ownership'),	
			'vendor_id'	=>	$this->input->post('vendor_id'),
			'lease_start_date'	=>	$this->input->post('lease_start_date'),
			'lease_end_date'	=>	$this->input->post('lease_end_date'),
			'cost'	=>	$this->input->post('cost'),
			'weight_capacity'	=>	$this->input->post('weight_capacity'),
			'model_no'	=>	$this->input->post('model_no'),
			'make'	=>	$this->input->post('make'),
			'description'  => $this->input->post('description'),

			'create_date' => date("Y/m/d"),);
			
			$query = $this->db->insert('vehicle_master',$vehicle_data);
			
			
			if($query){
			$last_user_id = $this->db->insert_id();
			return $last_user_id;
			} else{
			return false;
			}
	
	}
	
	function getAllVehicles($limit, $start)
    { 
		$this->db->limit($limit, $start);
        $query = $this->db->get("vehicle_master");

        if ($query->num_rows() > 0)
        { 
			return $query->result_array();
        }
        else {return NULL;}

    } 
	
	public function record_count()
	 {

        return $this->db->count_all("vehicle_master");

    }


	
	
	function getUser($id)
    {
		$query = $this->db->query("select * from vehicle_master where id = $id");
  
        if ($query->num_rows() > 0)
        { 
			return $query->row_array();
        }
        else {return NULL;}
    }   
	


	function updateUserData(){
		
		$vehicle_data = array(
			'vehicle_no'	=>	$this->input->post('vehicle_no'),
			'vehicle_type'		=>	$this->input->post('vehicle_type'),	
			'make_year'		=>	$this->input->post('make_year'),	
			'color'				=>	$this->input->post('color'),
			'chasis_no'		=>	$this->input->post('chasis_no'),	
			'vehicle_ownership'	=>	$this->input->post('vehicle_ownership'),
			'vendor_id'	=>	$this->input->post('vendor_id'),
			'lease_start_date'	=>	$this->input->post('lease_start_date'),
			'lease_end_date'	=>	$this->input->post('lease_end_date'),
			'cost'	=>	$this->input->post('cost'),
			'weight_capacity'	=>	$this->input->post('weight_capacity'),
			'model_no'	=>	$this->input->post('model_no'),
			'make'	=>	$this->input->post('make'),
			'description'	=>	$this->input->post('description'),
			'model_no'	=>	$this->input->post('model_no'),
			'create_date' => date("Y/m/d"),);
			
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('vehicle_master',$vehicle_data); 
	}
	}

