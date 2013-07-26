<?php
class VehicleInsurance extends CI_Controller
{
	public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
      //$this->load->model("vehicle_model");
        $this->load->library("pagination");
    }
	 public function index(){
			$this->viewVehicleInsurance();
		}
		public function viewVehicleInsurance(){
		//if($this->session->userdata('user_name')) {
			$this->load->database();
			$this->load->model('vehicle_model');
			$config = array();
  			$config["base_url"] = base_url() . "/vehicleInsurance/ViewVehicleInsurance";
			$config["total_rows"] = $this->vehicle_model->record_count();
			$config["per_page"] = 5;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data["records"] = $this->vehicle_model->getAllVehicleIn($config["per_page"], $page);
			$data["links"] = $this->pagination->create_links();
			
		 	$this->load->view('frontend/vehicleInsuranceView', $data);
				 
		//	}
		//	else {
		//		redirect('user/login');
		//		}
		}

		public function addVehicleIn()
	{

		$this->load->database();
		$this->load->model('vehicle_model');
		$this->vehicle_model->setVehicleIn();
		redirect('vehicleInsurance/viewVehicleInsurance');
	}

	public function edit_vehicleIn($id = 0){
			
			$this->load->database();
			$this->load->model('vehicle_model');
			$data = array();
			if($this->input->post('update'))
			{
				
				$this->vehicle_model->updateVehicle();
			}
			$query = $this->vehicle_model->getvehicle($id);
			$data['fid']['value'] = $query['id'];
			$data['fvehicle_id']['value'] = $query['vehicle_id'];
			$data['finsurance']['value'] = $query['insurer'];
			$data['finsurance_expiry_date']['value'] = $query['Insurance_expiry_date'];
			$data['finsurance_cost']['value'] = $query['Insurance_cost'];
			$data['fpermit']['value'] = $query['permit'];
			$data['fpermit_expiry_date']['value'] = $query['permit_expiry_date'];
			$data['fpermit_cost']['value'] = $query['permit_cost'];
			$data['ffitness']['value'] = $query['fitness'];
			$data['ffitness_expiry_date']['value'] = $query['fitness_expiry_date'];
			$data['ffitness_cost']['value'] = $query['fitness_cost'];
			$data['froadtax']['value'] = $query['roadtax'];
			$data['froadtax_expiry_date']['value'] = $query['roadtax_expiry_date'];
			$data['froadtax_cost']['value'] = $query['roadtax_cost'];
			$data['fpuc']['value'] = $query['puc'];
			$data['fpuc_expiry_date']['value'] = $query['puc_expiry_date'];
			$data['fpuc_cost']['value'] = $query['puc_cost'];
			$config = array();
  			$config["base_url"] = base_url() . "/vehicleInsurance/edit_vehicleIn";
			$config["total_rows"] = $this->vehicle_model->record_count();
			$config["per_page"] = 5;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data["records"] = $this->vehicle_model->getAllVehicleIn($config["per_page"], $page);
			$data["links"] = $this->pagination->create_links();
		 	$this->load->view('frontend/updateVehicle', $data); 

			
			
			//$data['meta_title']  = 'Distance | VMS-1.0';
			
		
	}
	

}
 ?>
