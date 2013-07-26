<?php 
class Ajax extends CI_Controller
{
	public function __construct() {
			       	 parent:: __construct();
		$this->load->helper("url");
	      $this->load->model("vehicle_model");
		$this->load->library("pagination");
		$this->load->database();
	    }
		function vehicleShow() {

//echo $this->uri->segment(0);
//echo $this->uri->segment(1);
//echo $this->uri->segment(2);
	$id= $this->uri->segment(3);

            $arrV = $this->vehicle_model->getVehiclet($id);

		foreach ($arrV as $v) {
           	    echo $arrFinal[$v->vehicletype] = $v->vehicletype.",";
		echo  $arrFinal[$v->make] = $v->make;
            }

		
	       
		


      }       
     
}
?>
