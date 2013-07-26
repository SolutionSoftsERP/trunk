<?php include("includes/header.php"); ?>
            <!-- main content -->
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

      chasis_no:{required: true},

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
			$attributes = array('name' => 'insurance', 'id' => 'insurance');	   
	  		echo form_open('insurance/editinsurance', $attributes);
			echo form_hidden('id',$fid['value']);
       ?>
                       <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label id="vehicle_id">Vehicle Id<span class="f_req">*</span></label>
                                          
                                             <?php echo form_input('vehicle_id',$fvehicle_id['value']); ?>
                                       </div></td>
										<td><div class="row-fluid"><label id="engine_oil_change_date">Engine Oil Change Date<span class="f_req">*</span></label>
						                  <?php echo form_input('engine_oil_change_date',$fengine_oil_change_date['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label id="make_year">Tyres Change Date<span class="f_req">*</span></label>
                                      
                                             <?php echo form_input('tyres_change_date',$ftyres_change_date['value']); ?>
                                        </div></td>
									</tr>
									<tr>
										<td><div class="row-fluid"><label id="color">Gear Box Change Date<span class="f_req">*</span></label>
                                            <?php echo form_input('gear_box_change_date',$fgear_box_change_date['value']); ?>
                                         </div></td>
										<td>
                                        <div class="row-fluid"><label id="chasis_no">Battery Change Date<span class="f_req">*</span></label>
                                          <?php echo form_input('battery_change_date',$fbattery_change_date['value']); ?>
                                        </div></td>
                                         <td><div class="row-fluid"><label id="permit_expiry_date">Brakes Change Date<span class="f_req">*</span></label>
                                          <?php echo form_input('brakes_change_date',$fbrakes_change_date['value']); ?>
                                        </div>
                                        </td>
									</tr>
									<tr>
										<td><div class="row-fluid"><label id="engine_oil_cost">Engine Oil Cost <span class="f_req">*</span></label>
                                           <?php echo form_input('engine_oil_cost',$fengine_oil_cost['value']); ?>
                                        </div></td>
										<td><div class="row-fluid"><label id="tyres_cost">Tyres Cost<span class="f_req"></span></label>
                                          <?php echo form_input('tyres_cost',$ftyres_cost['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label id="gear_box_cost">Gear Box Cost<span class="f_req">*</span></label>
                                             <?php echo form_input('gear_box_cost',$fgear_box_cost['value']); ?>
                                        </div></td>
										
									</tr>
									<tr>
										<td><div class="row-fluid"><label id="cost">Battery Cost<span class="f_req">*</span></label>
                                              <?php echo form_input('battery_cost',$fbattery_cost['value']); ?>
                                        </div></td>
										<td><div class="row-fluid"><label id="weight_capacity">Brakes Cost<span class="f_req">*</span></label>
                                              <?php echo form_input('brakes_cost',$fbrakes_cost['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label id="model_no">Servicing Date<span class="f_req">*</span></label>
                                                 <?php echo form_input('servicing_date',$fservicing_date['value']); ?>
                                        </div></td>
									
									</tr>
									<tr>
										<td><div class="row-fluid"><label id="make">Servicing Cost<span class="f_req">*</span></label>
                                                <?php echo form_input('servicing_cost',$fservicing_cost['value']); ?>
                                        </div></td>
                                       
                                 
										<td><div class="row-fluid"><label id="description">Description<span class="f_req">*</span></label>
                                                  <?php echo form_input('description',$fdescription['value']); ?>
                                        </div></td>
                                        
									</tr>
                                    <tr>
										<td rowspan="3">
                                        <?php echo form_submit('update', 'update');	 ?>
                                        <?php   echo form_reset('cancel', 'cancel'); ?>
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
                         
                        </div>
                    </div>
                        
                </div>
                
            </div>
            
		<?php include("includes/sidebar.php"); ?>	

