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
                                    <a href="#">Vehicle Master</a>
                                </li>
                              </ul>
                        </div>
                    </nav>
     <?php
			$attributes = array('name' => 'vehicle', 'id' => 'vehicle');	   
	  		echo form_open('vehicle/editVehicle', $attributes);
			echo form_hidden('id',$fid['value']);
       ?>
                       <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label id="vehicle_no">Vehicle no<span class="f_req">*</span></label>
                                          
                                             <?php echo form_input('vehicle_no',$fvehicle_no['value']); ?>
                                       </div></td>
										<td><div class="row-fluid"><label id="vehicle_type">Vehicle Type<span class="f_req">*</span></label>
						                  <?php echo form_input('vehicle_type',$fvehicle_type['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label id="make_year">Make Year<span class="f_req">*</span></label>
                                      
                                             <?php echo form_input('make_year',$fmake_year['value']); ?>
                                        </div></td>
									</tr>
									<tr>
										<td><div class="row-fluid"><label id="color">Color<span class="f_req">*</span></label>
                                            <?php echo form_input('color',$fcolor['value']); ?>
                                         </div></td>
										<td>
                                        <div class="row-fluid"><label id="chasis_no">Chasis No<span class="f_req">*</span></label>
                                          <?php echo form_input('chasis_no',$fchasis_no['value']); ?>
                                        </div></td>
                                         <td><div class="row-fluid"><label>Vehicle Ownership<span class="f_req">*</span></label>
                                          <?php echo form_input('vehicle_ownership',$fvehicle_ownership['value']); ?>
                                        </div>
                                        </td>
									</tr>
									<tr>
										<td><div class="row-fluid"><label id="vendor_id">Vendor Id <span class="f_req">*</span></label>
                                           <?php echo form_input('vendor_id',$fvendor_id['value']); ?>
                                        </div></td>
										<td><div class="row-fluid"><label id="lease_start_date">Lease Start Date<span class="f_req"></span></label>
                                          <?php echo form_input('lease_start_date',$flease_start_date['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label id="lease_end_date">Lease End Date<span class="f_req">*</span></label>
                                             <?php echo form_input('lease_end_date',$flease_end_date['value']); ?>
                                        </div></td>
										
									</tr>
									<tr>
										<td><div class="row-fluid"><label id="cost">Cost<span class="f_req">*</span></label>
                                              <?php echo form_input('cost',$fcost['value']); ?>
                                        </div></td>
										<td><div class="row-fluid"><label id="weight_capacity">Weight Capacity<span class="f_req">*</span></label>
                                              <?php echo form_input('weight_capacity',$fweight_capacity['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label id="model_no">Model No<span class="f_req">*</span></label>
                                                 <?php echo form_input('model_no',$fmodel_no['value']); ?>
                                        </div></td>
									
									</tr>
									<tr>
										<td><div class="row-fluid"><label id="make">Make<span class="f_req">*</span></label>
                                                <?php echo form_input('make',$fmake['value']); ?>
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
                         
                        </div>
                    </div>
                        
                </div>
                
            </div>
            
		<?php include("includes/sidebar.php"); ?>	

