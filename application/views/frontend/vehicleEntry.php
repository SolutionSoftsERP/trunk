<?php include("includes/header.php"); ?>
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
                                    <a href="#">Vehicle Entry</a>
                                </li>
                              </ul>
                        </div>
                    </nav>
     <?php
			$attributes = array('name' => 'vehicleEntry', 'id' => 'vehicleEntry');	   
	  		echo form_open('vehicle/saveVehicle', $attributes);
	?>
                       <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Vehicle no<span class="f_req">*</span></label>
                                          
                                             <?php echo form_input('vehicle_no'); ?>
                                       </div></td>
										<td><div class="row-fluid"><label>Vehicle Type<span class="f_req">*</span></label>
						                  <?php $atts = array(
										 			  'select' => 'Select',	
													  'truck' => 'Truck',
													  'trala'   => 'Trala',
													  'dumpher' =>'Dumpher'
													  
											   ); ?>
                                             <?php echo form_dropdown('vehicle_type', $atts, 'select'); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Make Year<span class="f_req"></span></label>
                                      
                                             <?php echo form_input('make_year'); ?>
                                        </div></td>
									</tr>
									<tr>
										<td><div class="row-fluid"><label>Color<span class="f_req">*</span></label>
                                            <?php echo form_input('color'); ?>
                                         </div></td>
										<td>
                                        <div class="row-fluid"><label>Chasis No<span class="f_req">*</span></label>
                                          <?php echo form_input('chasis_no'); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Vehicle Ownership<span class="f_req">*</span></label>
                                          <?php $atts = array(
										 			  'select' => 'Select',	
													  'owner' => 'Owner',
													  'lease'   => 'Lease'
											   ); ?>
                                             <?php echo form_dropdown('vehicle_ownership', $atts, 'select'); ?>
                                        </div>
                                        </td>
									</tr>
									<tr>
										<td><div class="row-fluid"><label>Vendor <span class="f_req"></span></label>
                                          <?php $atts = array(
										 			  'select' => 'Select',	
													  '1' => '1',
													  '2'   => '2',
													  '3' => '3',
													  '4'   => '4'
													  
											   ); ?>
                                             <?php echo form_dropdown('vendor_id', $atts, 'select'); ?>
                                        </div></td>
										<td><div class="row-fluid"><label>Lease Start Date<span class="f_req"></span></label>
                                          <?php echo form_input('lease_start_date'); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Lease End Date<span class="f_req"></span></label>
                                             <?php echo form_input('lease_end_date'); ?>
                                        </div></td>
										
									</tr>
									<tr>
										<td><div class="row-fluid"><label>Cost<span class="f_req" ></span></label>
                                              <?php echo form_input('cost'); ?>
                                        </div></td>
										<td><div class="row-fluid"><label>Weight Capacity<span class="f_req" ></span></label>
                                              <?php echo form_input('weight_capacity'); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Model No<span class="f_req"></span></label>
                                                 <?php echo form_input('model_no'); ?>
                                        </div></td>
									
									</tr>
									<tr>
										<td><div class="row-fluid"><label>Make<span class="f_req">*</span></label>
                                                         <?php echo form_input('make'); ?>
                                        </div></td>
										<td><div class="row-fluid"><label>Description<span class="f_req"></span></label>
										<?php $atts = array( 
										'name' => 'description',
										'id'   => 'description',
										'rows' => 3,
										'cols' => 5,); ?>
                                                        <?php echo form_textarea($atts); ?>
                                        </div></td>
                                        
									
									</tr>
                                    <tr>
										<td rowspan="3">
                                        <?php echo form_submit('create', 'Create');	 ?>
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
                                        <th>Vehicle Ownership</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
                               <?php
							   if(isset($records)){
								$sno = 0;
								foreach($records as $row){
									$sno = $sno + 1;
								 ?>
									<tr>
										<td><?php echo $sno; ?> </td>
										<td><?php echo $row['vehicle_no']; ?></td>
										<td><?php echo $row['vehicle_type']; ?></td>
										<td><?php echo $row['vehicle_ownership']; ?></td>
                                        
										<td><a href="<?php echo base_url(); ?>/index.php?user/edit_user/<?php echo $row['id']; ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
											<a href="#" title="Delete"><i class="icon-trash"></i></a></td>
									</tr>
								<?php }} ?>	
								</tbody>
							</table>
                        
                        </div>
                    </div>
                        
                </div>
                
            </div>
            
		<?php include("includes/sidebar.php"); ?>	