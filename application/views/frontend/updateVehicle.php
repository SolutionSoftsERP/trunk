<?php include("includes/header.php"); ?>

<script>
            $(document).ready(function(){
                $('#insurance_ex_date').Zebra_DatePicker();
$('#permit_ex_date').Zebra_DatePicker();
$('#fitness_ex_date').Zebra_DatePicker();
$('#roadtax_ex_date').Zebra_DatePicker();
$('#puc_ex_date').Zebra_DatePicker();
    //* validation
    $('#updatevehicle').validate({
     onkeyup: false,
     errorClass: 'error',
     validClass: 'valid',
     rules: {
      insurance: { required: true, },
      insurance_ex_date: { required: true, },
      insurance_cost:{ required: true,},
	permit: { required: true, },
      permit_ex_date: { required: true, },
      permit_cost:{ required: true,},
	fitness: { required: true, },
      fitness_ex_date: { required: true, },
      fitness_cost:{ required: true,},
	roadtax: { required: true, },
      roadtax_ex_date: { required: true, },
      roadtax_cost:{ required: true,},
	puc: { required: true, },
      puc_ex_date: { required: true, },
      puc_cost:{ required: true,},
      
      
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
     },
     errorPlacement: function(error, element) {
      $(element).closest('div').append(error);
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
                                    <a href="#">Vehicle Insurance</a>
                                </li>
                              </ul>
                        </div>
                    </nav>
     <?php
			$attributes = array('name' => 'updatevehicle', 'id' => 'updatevehicle');	   
	  		echo form_open('vehicleInsurance/edit_vehicleIn', $attributes);
			echo form_hidden('id',$fid['value']);
       ?>
                       <div class="displa_table">
                           <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;"> <td><div class="row-fluid"><label>Vehicle_ID<span class="f_req">*</span></label>

				   				<?php $options = array(
									
								  '01'  => '01',
								  '02'    => '02',
								  '03'   => '03',
								  '04' => '04',
                							);

							

							echo form_dropdown('vehicle_id', $options, 'large');
?>


		
                                           <!--<?php $atts = array(
													  'name' => 'vehicle_id',
													  'id'   => 'vehicle_id',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>-->
                                            
                                       </div></td>	

						<td><div class="row-fluid"><label>Vehicle Type<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'vehicle_type',
													  'id'   => 'insurance',
													  'size' => 50,
													//'value'=> $fvehicle_type['value'],
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Make<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'make',
													  'id'   => 'make',
													  'size' => 50,
												//'value'=> $fmake['value'],
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
</tr><tr style="border:none; background-color:#FFF;">





			
										<td><div class="row-fluid"><label>Insurance<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'insurance',
													  'id'   => 'insurance',
													  'size' => 50,
													'value'=> $finsurance['value'],
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Insurance Expiry Date<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'insurance_ex_date',
													  'id'   => 'insurance_ex_date',
													  'size' => 50,
												'value'=> $finsurance_expiry_date['value'],
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
					
                                        <td><div class="row-fluid"><label>Insurance Cost<span class="f_req">*</span></label>
                                       <?php $atts = array(
													
													  'name' => 'insurance_cost',
													  'id'   => 'insurance_cost',
													  'size' => 35, 
												'value'=> $finsurance_cost['value'],
													
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                        </div></td>
</tr><tr style="border:none; background-color:#FFF;">
						



									
										
										<td><div class="row-fluid"><label>Permit<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'permit',
													  'id'   => 'permit',
													  'size' => 50,
											'value'=> $fpermit['value'],
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Permit Expiry Date<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'permit_ex_date',
													  'id'   => 'permit_ex_date',
													  'size' => 50,
			 						'value'=> $fpermit_expiry_date['value'],			   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
				
                                        <td><div class="row-fluid"><label>Permit Cost<span class="f_req">*</span></label>
                                       <?php $atts = array(
													
													  'name' => 'permit_cost',
													  'id'   => 'permit_cost',
													  'size' => 35,
								'value'=> $fpermit_cost['value'],
													
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                        </div></td>
</tr><tr style="border:none; background-color:#FFF;">
					







					
										
										<td><div class="row-fluid"><label>Fitness<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'fitness',
													  'id'   => 'fitness',
													  'size' => 50,
												'value'=> $ffitness['value'],
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Fitness Expiry Date<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'fitness_ex_date',
													  'id'   => 'fitness_ex_date',
													  'size' => 50,
												'value'=> $ffitness_expiry_date['value'],
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
					
                                        <td><div class="row-fluid"><label>Fitness Cost<span class="f_req">*</span></label>
                                       <?php $atts = array(
													
													  'name' => 'fitness_cost',
													  'id'   => 'fitness_cost',
													  'size' => 35,
											'value'=> $ffitness_cost['value'],
													
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                        </div></td>
						</tr><tr style="border:none; background-color:#FFF;">			




										
										<td><div class="row-fluid"><label>Roadtax<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'roadtax',
													  'id'   => 'roadtax',
													  'size' => 50,
												'value'=> $froadtax['value'],
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Roadtax Expiry Date<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'roadtax_ex_date',
													  'id'   => 'roadtax_ex_date',
													  'size' => 50,
								 			'value'=> $froadtax_expiry_date['value'],
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
					
                                        <td><div class="row-fluid"><label>Roadtax Cost<span class="f_req">*</span></label>
                                       <?php $atts = array(
													
													  'name' => 'roadtax_cost',
													  'id'   => 'roadtax_cost',
													  'size' => 35,
								'value'=> $froadtax_cost['value'],
													
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                        </div></td>
						</tr><tr style="border:none; background-color:#FFF;">			




										
										<td><div class="row-fluid"><label>Puc<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'puc',
													  'id'   => 'puc',
													  'size' => 50,
									'value'=> $fpuc['value'],
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Puc Expiry Date<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'puc_ex_date',
													  'id'   => 'puc_ex_date',
													  'size' => 50,
											'value'=> $fpuc_expiry_date['value'],
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
				
                                        <td><div class="row-fluid"><label>Puc Cost<span class="f_req">*</span></label>
                                       <?php $atts = array(
													
													  'name' => 'puc_cost',
													  'id'   => 'puc_cost',
													  'size' => 35,
							'value'=> $fpuc_cost['value'],
													
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                        </div></td>
									</tr>






											                                    <tr>
										<td rowspan="3">
                                        <?php echo form_submit('update', 'Update');	 ?>
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
										<th>Insurance</th>
										<th>Insurance Ex_Date</th>
                                        					
                                        					<th>Permit</th>
										<th>Permit Ex_Date</th>
                                        					
										<th>Fitness</th>
										<th>Fitness Ex_Date</th>
                                        					
										<th>RoadTax</th>
										<th>RoadTax Ex_Date</th>
                                        					
										<th>Puc</th>
										<th>Puc Ex_Date</th>
                                        					
									
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
										<td><?php echo $row['insurer']; ?></td>
										<td><?php echo $row['Insurance_expiry_date']; ?></td>
										
										<td><?php echo $row['permit']; ?></td>
										<td><?php echo $row['permit_expiry_date']; ?></td>
										
										<td><?php echo $row['fitness']; ?></td>
										<td><?php echo $row['fitness_expiry_date']; ?></td>
										
										<td><?php echo $row['roadtax']; ?></td>
										<td><?php echo $row['roadtax_expiry_date']; ?></td>
										
										<td><?php echo $row['puc']; ?></td>
										<td><?php echo $row['puc_expiry_date']; ?></td>
										<td><a href="<?php echo base_url(); ?>/index.php?vehicleInsurance/edit_vehicleIn/<?php echo $row['id']; ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
											</i></a></td>
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
