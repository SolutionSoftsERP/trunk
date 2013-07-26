<?php
class Distance_Controller extends CI_Controller
{
     public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("distance_model");
        $this->load->library("pagination");
    }  
	
    
	public function distance()
	{	
		if($this->session->userdata('user_name')) {
		$data['records'] = $this->distance_model->get_distance();
		$this->load->view('frontend/distanceMaster', $data); 
		}else{
		redirect('user/login');
		}
	}

	public function addDistance()
	{
		
		//if($this->input->post('saveDistance')){
		
			$this->distance_model->setDistance();
		//}
		$this->distance();
		
		
	}

	function get_records(){
			echo "Distance Controller";

			$this->load->model('distance_model');
		 	
			$data['records'] = $this->distance_model->get_distance();
			$this->load->view('frontend/distanceMaster', $data); // load the view with the $data variable
			
	}

		public function edit_distance($id = 0){
			$this->load->database();
			$this->load->model('distance_model');
			$data = array();
			if($this->input->post('update'))
			{
				$this->distance_model->updateDistance();
			}
			$query = $this->distance_model->get_dist($id);
			
			$data['fid']['value'] = $query['id'];
			$data['ffrom']['value'] = $query['from'];
			$data['fto']['value'] = $query['to'];
			$data['fdistance']['value'] = $query['distance'];
			$data['fdate']['value'] = $query['create_date'];
			
			$data['records'] = $this->distance_model->get_distance();
			//$data['main_content'] ='frontend/distanceMaster';
			$data['meta_title']  = 'Distance | VMS-1.0';
			
			$this->load->view('frontend/distanceEdit', $data);
	}
	
	

}

?>
