

<?php include("includes/header.php"); ?>
<script>
            $(document).ready(function(){
                
    //* validation
    $('#vendor').validate({
     onkeyup: false,
     errorClass: 'error',
     validClass: 'valid',
     rules: {
      vname: { required: true, },
      address1: { required: true, },
      city:{ required: true,},
      state:{ required: true,},
      pincode:{ required: true,},
      mobile:{ required: true,},
      msupply:{ required: true,},
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
                                    <a href="#">Vendor Master</a>
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
        	
			$attributes = array('name' => 'vendor', 'id' => 'vendor');	   
	  		echo form_open('vendor/editVendor', $attributes);
			echo form_hidden('id',$fid['value']);
			

       ?>
                        
                        <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Vendor Name<span class="f_req">*</span></label>
                                         
                                             <?php echo form_input('vname',$fvendor_name['value']); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Address1<span class="f_req">*</span></label>
                                        
						                    <?php echo form_input('address1',$faddress1['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>address2<span class="f_req">*</span></label>
                                             <?php echo form_input('address2',$faddress2['value']); ?>
                                        </div></td>
									</tr>

						<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>City<span class="f_req">*</span></label>
                                           
                                             <?php echo form_input('city',$fcity['value']); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>state<span class="f_req">*</span></label>
                                           <?php echo form_input('state',$fstate['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>pincode<span class="f_req">*</span></label>
                                           <?php echo form_input('pincode',$fpincode['value']); ?>
                                        </div></td>
									</tr>

									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Phone<span class="f_req">*</span></label>
                                            <?php echo form_input('phone',$fphone['value']); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Mobile<span class="f_req">*</span></label>
                                       	                    <?php echo form_input('mobile',$fmobile['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>notes<span class="f_req">*</span></label>
                                             <?php echo form_input('notes',$fnotes['value']); ?>
                                        </div></td>
									</tr>


						<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Material Supply<span class="f_req">*</span></label>
                                             <?php echo form_input('material_supply',$fmaterial_supply['value']); ?>
                                            
                                       </div></td></tr>
									
                                    <tr>
											<td rowspan="3">
                                        <?php   echo form_submit('update', 'update'); ?>
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
										<th>VendorName</th>
										<th>Address1</th>
                                        					<th>Address2</th>
                                        					<th>city</th>
										<th>State</th>																								
				<th>PinCode</th>										
					<th>Phone</th>										
										<th>Mobile</th>
				<th>Notes</th>										
				<th>MaterialSupply</th>										
										
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
										<td><?php echo $row['vendor_name']; ?></td>
										<td><?php echo $row['address1']; ?></td>
										<td><?php echo $row['address2']; ?></td>
                                        					<td><?php echo $row['city']; ?></td>
			<td><?php echo $row['state']; ?></td>	
<td><?php echo $row['pincode']; ?></td>								
<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['mobile']; ?></td>
									<td><?php echo $row['notes']; ?></td>
									<td><?php echo $row['material_supply']; ?></td>

<td><a href="<?php echo base_url(); ?>/index.php?distance_controller/edit_distance/<?php echo $row['id']; ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
				<a href="<?php echo base_url(); ?>/index.php?vendor/statusVendor/<?php echo $row['id']; ?>" title="Delete"><i class="icon-trash"></i></a></td>
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

