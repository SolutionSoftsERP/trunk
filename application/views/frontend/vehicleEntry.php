

<?php include("includes/header.php"); ?>

 <script>

            $(document).ready(function(){

    $('#dob').Zebra_DatePicker({

     // remember that the way you write down dates

     // depends on the value of the "format" property!

      view: 'years'

    });

    //* validation

    $('#vehicle').validate({

     onkeyup: false,

     errorClass: 'error',

     validClass: 'valid',

     rules: {

      vehicle_no: { required: true},

      vehicle_type: { required: true },

      make_year:{ required: true},

      color:{required: true},

      chasis_no:{required: true,digits:true},

      vehicle_ownership:{required: true},

      vendor_id:{required: true},

      lease_start_date:{required: true},

      lease_end_date:{required: true},

      cost:{required: true},

      weight_capacity:{required: true},

      model_no:{required: true},

      make:{required: true},

      description:{required: true},

      

     },

     highlight: function(element) {

      $(element).closest('div').addClass("f_error");

      setTimeout(function() {

       boxHeight()

      }, 200)

     },

     unhighlight: function(element) {

      $(element).closest('div').removeClass("f_error");

      setTimeout(function() {

       boxHeight()

      }, 200)

     }

    });

            });

        </script>

            <!-- main content -->
            <div id="contentwrapper">
                <div class="main_content">
                    
                    <nav>
                        <div id="jCrumbs" class="breadCrumb module">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-home"></i></a>
                                </li>
                                <li>
                                    <a href="#">Vehicle Master</a>
                                </li>
                                <!--<li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Project</a>
                                </li>
                                <li>
                                   <a href="#"> Contact Us</a>
                                </li>-->
                            </ul>
                        </div>
                    </nav>
     <?php
        	
			$attributes = array('name' => 'vehicle', 'id' => 'vehicle');	   
	  		echo form_open('vehicle/addVehicle' , $attributes);
			

       ?>
                        
                        <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Vehicle No<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'vehicle_no',
													  'id'   => 'vehicle_no',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Vehicle Type<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'vehicle_type',
													  'id'   => 'vehicle_type',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Make Year<span class="f_req"></span></label>
                                       <?php $atts = array(
													
													  'name' => 'make_year',
													  'id'   => 'make_year',
													  'size' => 35
													
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                        </div></td>
									</tr>

						<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Color<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'color',
													  'id'   => 'color',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Chasis No<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'chasis_no',
													  'id'   => 'chasis_no',
													  'size' => 50
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Vehicle Ownership<span class="f_req">*</span></label>
                                          <?php $atts = array(
													  'name' => 'vehicle_ownership',
													  'id'   => 'vehicle_ownership',
													  'size' => 50
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
									</tr>

									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Vendor Id<span class="f_req"></span></label>
                                            <?php $atts = array(
													  'name' => 'vendor_id',
													  'id'   => 'vendor_id',
													  'size' => 50
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
										<td><div class="row-fluid"><label>Lease Start Date<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'lease_start_date',
													  'id'   => 'lease_start_date',
													  'size' => 50
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
                                 <td><div class="row-fluid"><label>Leaes End Date<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'lease_end_date',
													  'id'   => 'lease_end_date',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td></tr>
                                       <tr style="border:none; background-color:#FFF;">
                                       <td><div class="row-fluid"><label>Cost<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'cost',
													  'id'   => 'cost',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
                                       <td><div class="row-fluid"><label>Weight Capacity<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'weight_capacity',
													  'id'   => 'weight_capacity',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
                                       <td><div class="row-fluid"><label>Model No<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'model_no',
													  'id'   => 'model_no',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td></tr>
                                       <tr style="border:none; background-color:#FFF;">
                                       <td><div class="row-fluid"><label>Make<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'make',
													  'id'   => 'make',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
                                      
                     <td><div class="row-fluid"><label>Description<span class="f_req"></span></label>
                                       <?php $atts = array(
													
													  'name' => 'description',
													  'id'   => 'description',
													  'rows' => 5,
													   'cols' => 5,
										   ); ?>
                                             <?php echo form_textarea($atts); ?>
                                        </div></td>
					
										
										</tr>
									
                                    <tr>
											<td rowspan="3">
                                        <?php   echo form_submit('vehicle', 'Submit'); ?>
                                        <?php   echo form_reset('cancel', 'Cancel'); ?>
                                     	   </td>
									</tr>
                                    
								</tbody>
							</table>
                        
                        </div>
                        <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl">
								<thead>
									<tr>
										
										<th>S.No</th>
										<th>Vehicle No</th>
										<th>Vehicle Type</th>
                                        <th>Make Year</th>
                                        <th>Color</th>
                                        <th>Chasis No</th>
                                        <th>Vehicle Ownership</th>
                                        <th>Vendor Id</th>
                                        <th>Lease Start Date</th>
                                        <th>Lease End Date</th>
                                        <th>Cost</th>
                                        <th>Weight Capacity</th>
                                        <th>Model No</th>
                                        <th>Make</th>
										<th>Description</th>																								
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
                                <?php
								$sno = 0;
								foreach($records as $row){
									$sno = $sno + 1;
								 ?>
									<tr>
										<td><?php echo $sno; ?> </td>
										<td><?php echo $row['vehicle_no']; ?></td>
										<td><?php echo $row['vehicle_type']; ?></td>
                                        <td><?php echo $row['make_year']; ?></td>
                                        <td><?php echo $row['color']; ?></td>
                                        <td><?php echo $row['chasis_no']; ?></td>
                                        
										<td><?php echo $row['vehicle_ownership']; ?></td>
                                        <td><?php echo $row['vendor_id']; ?></td>
                                        <td><?php echo $row['lease_start_date']; ?></td>
                                        <td><?php echo $row['lease_end_date']; ?></td>
                                        <td><?php echo $row['cost']; ?></td>
                                        <td><?php echo $row['weight_capacity']; ?></td>
                                        <td><?php echo $row['model_no']; ?></td>
                                        <td><?php echo $row['make']; ?></td>
			                           <td><?php echo $row['description']; ?></td>	
                                    

<td><a href="<?php echo base_url(); ?>/index.php?vehicle/editVehicle/<?php echo $row['id']; ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
				<a href="#" title="Delete"><i class="icon-trash"></i></a></td>
									</tr>
								<?php } ?>	
								</tbody>
							</table>
                         <p><?php echo $links; ?></p>
                        </div>
                    </div>
                        
                </div>
                
            </div>
            
		<?php include("includes/sidebar.php"); ?>	

