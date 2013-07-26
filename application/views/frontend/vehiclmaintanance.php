

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
                                    <a href="#">Vehicle Insurance</a>
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
        	
			$attributes = array('name' => 'insurance', 'id' => 'insurance');	   
	  		echo form_open('insurance/addinsurance' , $attributes);
			

       ?>
                        
                        <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Vehicle Id<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'vehicle_id',
													  'id'   => 'vehicle_id',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Engine Oil Change Date<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'engine_oil_change_date',
													  'id'   => 'engine_oil_change_date',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Tyres Change Date<span class="f_req"></span></label>
                                       <?php $atts = array(
													
													  'name' => 'tyres_change_date',
													  'id'   => 'tyres_change_date',
													  'size' => 35
													
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                        </div></td>
									</tr>

						<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Gear Box Change Date<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'gear_box_change_date',
													  'id'   => 'gear_box_change_date',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Battery Change Date<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'battery_change_date',
													  'id'   => 'battery_change_date',
													  'size' => 50
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Brakes Change Date<span class="f_req">*</span></label>
                                          <?php $atts = array(
													  'name' => 'brakes_change_date',
													  'id'   => 'brakes_change_date',
													  'size' => 50
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
									</tr>

									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Engine Oil Cost<span class="f_req"></span></label>
                                            <?php $atts = array(
													  'name' => 'engine_oil_cost',
													  'id'   => 'engine_oil_cost',
													  'size' => 50
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
										<td><div class="row-fluid"><label>Tyres Cost<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'tyres_cost',
													  'id'   => 'tyres_cost',
													  'size' => 50
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
                                 <td><div class="row-fluid"><label>Gear Box Cost<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'gear_box_cost',
													  'id'   => 'gear_box_cost',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td></tr>
                                       <tr style="border:none; background-color:#FFF;">
                                       <td><div class="row-fluid"><label>Battery Cost<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'battery_cost',
													  'id'   => 'battery_cost',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
                                       <td><div class="row-fluid"><label>Brakes Cost<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'brakes_cost',
													  'id'   => 'brakes_cost',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
                                       <td><div class="row-fluid"><label>Servicing Date<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => ' 	servicing_date',
													  'id'   => ' 	servicing_date',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td></tr>
                                       <tr style="border:none; background-color:#FFF;">
                                       <td><div class="row-fluid"><label>Servicing Cost<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'servicing_cost',
													  'id'   => 'servicing_cost',
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
                                        <?php   echo form_submit('insurance', 'Submit'); ?>
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
										<th>Vehicle Id</th>
                                        <th>Engine Oil Change Date</th>
										<th>Tyres Change Date</th>
                                        <th>Gear Box Change Date</th>
                                        <th>Battery Change Date</th>
                                        <th>Brakes Change Date</th>
                                        <th>Engine Oil Cost</th>
                                        <th>Tyres Cost</th>
                                        <th>Gear Box Cost</th>
                                        <th>Battery Cost</th>
                                        <th>Brakes Cost</th>
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
										<td><?php echo $row['vehicle_id']; ?></td>
										<td><?php echo $row['engine_oil_change_date']; ?></td>
                                        <td><?php echo $row['tyres_change_date']; ?></td>
                                        <td><?php echo $row['gear_box_change_date']; ?></td>
                                        <td><?php echo $row['battery_change_date']; ?></td>
                                        
										<td><?php echo $row['brakes_change_date']; ?></td>
                                        <td><?php echo $row['engine_oil_cost']; ?></td>
                                        <td><?php echo $row['tyres_cost']; ?></td>
                                        <td><?php echo $row['gear_box_cost']; ?></td>
                                        <td><?php echo $row['battery_cost']; ?></td>
                                        <td><?php echo $row['brakes_cost']; ?></td>
                                        
			                           <td><?php echo $row['description']; ?></td>	
                                    

<td><a href="<?php echo base_url(); ?>/index.php?insurance/editinsurance/<?php echo $row['id']; ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
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

