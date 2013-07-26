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

			
		public function viewForm(){
		$this->load->library("pagination");
		$this->load->model('Vehicle_Model');
			$config = array();
  			$config["base_url"] = base_url() . "/vehicle/viewForm";
			$config["total_rows"] = $this->Vehicle_Model->record_count();
			$config["per_page"] = 5;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data["records"] = $this->Vehicle_Model->getAll($config["per_page"], $page);
			$data["links"] = $this->pagination->create_links();
		
	
		
                        $this->load->view('frontend/vehicleEntry', $data);
	}	
			
		public function addVehicle()
		{       //$this->load->model("Vendor_Model");
			//$this->load->helper("url");
			if($this->input->post('vehicle')){			
				$this->Vehicle_Model->setVehicle();
			redirect('vehicle/viewForm');
}
		}
			public function getVehicle()
		{
			$this->load->model('Vehicle_Model');
			$data['records'] = $this->Vehicle_Model->getAllVehicle();
			$this->load->view('frontend/vehicleEntry', $data); // load the view with the $data variable
			
			}
	
	
	public function editVehicle($id = 0)
		{
			$this->load->database();
			$this->load->model('Vehicle_Model');
			$data = array();
			if($this->input->post('update'))
			{
				$this->Vehicle_Model->updateVehicle();			
		

			}
				$query = $this->Vehicle_Model->getVehicle($id);
				
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
			$data['records'] = $this->Vehicle_Model->getAllVehicle();
			
			$data['meta_title']  = 'Vehicle | VMS-1.0';
			
			$this->load->view('frontend/vehicleEdit', $data);
		}
	
	
}
?>

	