<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/****************************************************
## Package VMS-1.0
## User controller
## Login, Registration, Message, Notification
## From V 1.0
****************************************************/

class Vehicle extends CI_Controller {
		public function __construct()
      	 {
            parent::__construct();
           $this->load->model('Vehicle_Model');
		   $this->load->helper("url");
           $this->load->library("pagination");
        }

		public function index(){
						$data = array();
			
			//if($this->session->userdata('user_name')) {
			$config = array();
  			$config["base_url"] = base_url() . "/vehicle/vehicleEntry";
			$config["total_rows"] = $this->Vehicle_Model->record_count();
			$config["per_page"] = 3;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data["records"] = $this->Vehicle_Model->getAllVehicles($config["per_page"], $page);
			
			$data["links"] = $this->pagination->create_links();
			$data['main_content'] ='frontend/vehicle';
			$data['meta_title']  = 'Add Vehicle | VMS-1.0';
			$this->load->view('frontend/vehicleEntry', $data);
		}
			
		public function addVehicle(){
			$data = array();
			
			//if($this->session->userdata('user_name')) {
			$config = array();
  			$config["base_url"] = base_url() . "/vehicle/vehicleEntry";
			$config["total_rows"] = $this->Vehicle_Model->record_count();
			$config["per_page"] = 3;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data["records"] = $this->Vehicle_Model->getAllVehicles($config["per_page"], $page);
			
			$data["links"] = $this->pagination->create_links();
			$data['main_content'] ='frontend/vehicle';
			$data['meta_title']  = 'Add Vehicle | VMS-1.0';
			$this->load->view('frontend/vehicleEntry', $data);
			
		
			//}else {
			//redirect('user/login');
			//}
			}
			
		public function saveVehicle()
		{
	
			if($this->input->post('create') != ""){
			$this->load->model('Vehicle_Model');
			$last_id = $this->Vehicle_Model->add_vehicle();
			$this->addVehicle();
			}
		}
			
		public function edit_vehicle($id = 0){
			
			$this->load->model('vehicle_Model');
			$data = array();
			if($this->input->post('update')){
				$data['records'] = $this->vehicle_Model->updateUserData();
			}
			$query = $this->vehicle_Model->getUser($id);
				
			$data['fid']['value'] = $query['id'];
			$data['fvehicle_no']['value'] = $query['vehicle_no'];
			$data['fvehicle_type']['value'] = $query['vehicle_type'];
			$data['fmake_year']['value'] = $query['make_year'];
			$data['fcolor']['value'] = $query['color'];
			$data['fchasis_no']['value'] = $query['chasis_no'];
			$data['fvehicle_ownership']['value'] = $query['vehicle_ownership'];
			$data['fvendor_id']['value'] = $query['vendor_id'];
			$data['flease_start_date']['value'] = $query['lease_start_date'];
			$data['flease_end_date']['value'] = $query['lease_end_date'];
			$data['fcost']['value'] = $query['cost'];
			$data['fweight_capacity']['value'] = $query['weight_capacity'];
			$data['fmodel_no']['value'] = $query['model_no'];
			$data['fmake']['value'] = $query['make'];
			$data['fdescription']['value'] = $query['description'];
			
			
			
			$data['records'] = $this->vehicle_Model->getAllUsers();
			$data['main_content'] ='frontend/vehicleEdit';
			$data['meta_title']  = 'Registration | VMS-1.0';
			
			$this->load->view('frontend/vehicleEdit', $data);
	}


}
	