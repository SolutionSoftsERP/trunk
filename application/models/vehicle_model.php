<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vehicle_Model extends CI_Model
{


			public function setVehicleIn() 
			{
				$data = array(
				'vehicle_id'	=>$this->input->post('vehicle_id'),
				'insurer'	   =>	$this->input->post('insurance'),
				'Insurance_expiry_date'	   =>	$this->input->post('insurance_ex_date'),
				'Insurance_cost'  =>	$this->input->post('insurance_cost'),	
				'permit'	   =>	$this->input->post('permit'),
				'permit_expiry_date'	   =>	$this->input->post('permit_ex_date'),
				'permit_cost'  =>	$this->input->post('permit_cost'),	
				'fitness'	   =>	$this->input->post('fitness'),
				'fitness_expiry_date'	   =>	$this->input->post('fitness_ex_date'),
				'fitness_cost'  =>	$this->input->post('fitness_cost'),	
				'roadtax'	   =>	$this->input->post('roadtax'),
				'roadtax_expiry_date'	   =>	$this->input->post('roadtax_ex_date'),
				'roadtax_cost'  =>	$this->input->post('roadtax_cost'),	
				'puc'	   =>	$this->input->post('puc'),
				'puc_expiry_date'	   =>	$this->input->post('puc_ex_date'),
				'puc_cost'  =>	$this->input->post('puc_cost'),	
				'create_date'=> date('Y/m/d'),
				);
				
				$query = $this->db->insert('vehicle_insurance',$data);
			
			
				if($query){
				$last_user_id = $this->db->insert_id();
				return $last_user_id;
				} else{
				return false;
				}
			}

		public function getAllVehicleIn($limit, $start){
			$this->load->database();
			$this->db->limit($limit, $start);
			 $query = $this->db->get("vehicle_insurance");
			if ($query->num_rows() > 0)
			{ 
			
				return	 $query->result_array();
				
			}
			else {return NULL;}

		    } 
			public function record_count() {

			return $this->db->count_all("vehicle_insurance");

		    }

		public function getVehicle($id)
		{			
				$this->load->database();
				$query = $this->db->query("select * from vehicle_insurance where id = $id");
  
				 if ($query->num_rows() > 0)
				{ 
						return $query->row_array();
				}
				else {return NULL;}
			     
		} 

   		public function updateVehicle(){

				
				$data = array(
				'vehicle_id'	=>$this->input->post('vehicle_id'),
				'insurer'	   =>	$this->input->post('insurance'),
				'Insurance_expiry_date'	   =>	$this->input->post('insurance_ex_date'),
				'Insurance_cost'  =>	$this->input->post('insurance_cost'),	
				'permit'	   =>	$this->input->post('permit'),
				'permit_expiry_date'	   =>	$this->input->post('permit_ex_date'),
				'permit_cost'  =>	$this->input->post('permit_cost'),	
				'fitness'	   =>	$this->input->post('fitness'),
				'fitness_expiry_date'	   =>	$this->input->post('fitness_ex_date'),
				'fitness_cost'  =>	$this->input->post('fitness_cost'),	
				'roadtax'	   =>	$this->input->post('roadtax'),
				'roadtax_expiry_date'	   =>	$this->input->post('roadtax_ex_date'),
				'roadtax_cost'  =>	$this->input->post('roadtax_cost'),	
				'puc'	   =>	$this->input->post('puc'),
				'puc_expiry_date'	   =>	$this->input->post('puc_ex_date'),
				'puc_cost'  =>	$this->input->post('puc_cost'),	
				'create_date'=> date("Y/m/d"),
				);
				 
				$this->db->where('id',$this->input->post('id'));
				 $this->db->update('vehicle_insurance',$data); 		
				
					}
	function getVehiclet($id) {

      $query = $this->db->query("SELECT * FROM vehicle WHERE id = '{$id}'");
	
         
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }




}




?>
