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
                                    <a href="#">User Registration</a>
                                </li>
                              </ul>
                        </div>
                    </nav>
     <?php
			$attributes = array('name' => 'registration', 'id' => 'registration');	   
	  		echo form_open('user/edit_user', $attributes);
			echo form_hidden('id',$fid['value']);
       ?>
                       <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>User Name.<span class="f_req">*</span></label>
                                          
                                             <?php echo form_input('user_name',$fuser_name['value']); ?>
                                       </div></td>
										<td><div class="row-fluid"><label>Password<span class="f_req">*</span></label>
						                    <?php echo form_password('password',$fpassword['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Confirm Password<span class="f_req">*</span></label>
                                      
                                             <?php echo form_password('password',$fpassword['value']); ?>
                                        </div></td>
									</tr>
									<tr>
										<td><div class="row-fluid"><label>Email<span class="f_req">*</span></label>
                                            <?php echo form_input('email',$femail['value']); ?>
                                         </div></td>
										<td>
                                        <div class="row-fluid"><label>First Name<span class="f_req">*</span></label>
                                          <?php echo form_input('first_name',$ffirst_name['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Last Name<span class="f_req">*</span></label>
                                          <?php echo form_input('last_name',$flast_name['value']); ?>
                                        </div>
                                        </td>
									</tr>
									<tr>
										<td><div class="row-fluid"><label>Mobile <span class="f_req">*</span></label>
                                         <?php echo form_input('email',$fmobile['value']); ?>
                                        </div></td>
										<td><div class="row-fluid"><label>Phone<span class="f_req"></span></label>
                                          <?php echo form_input('phone',$fphone['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Address<span class="f_req">*</span></label>
                                             <?php echo form_input('address',$faddress['value']); ?>
                                        </div></td>
										
									</tr>
									<tr>
										<td><div class="row-fluid"><label>City<span class="f_req">*</span></label>
                                              <?php echo form_input('city',$fcity['value']); ?>
                                        </div></td>
										<td><div class="row-fluid"><label>State<span class="f_req">*</span></label>
                                              <?php echo form_input('state',$fstate['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Pincode<span class="f_req">*</span></label>
                                                 <?php echo form_input('pincode',$fpincode['value']); ?>
                                        </div></td>
									
									</tr>
									<tr>
										<td><div class="row-fluid"><label>Gender<span class="f_req">*</span></label>
                                       Male <input type="radio" name="myradio" value="1" <?php echo set_radio('myradio', 'male', TRUE); ?> />
									  Female	<input type="radio" name="myradio" value="2" <?php echo set_radio('myradio', 'female'); ?> />
                                        </div></td>
										<td><div class="row-fluid"><label>Marital Status<span class="f_req">*</span></label>
                                         <?php $atts = array(
										 			  'select' => 'Select',	
													  'single' => 'Single',
													  'married'=> 'Married'
											   ); ?>
                                             <?php echo form_dropdown('martial_status', $atts, 'select'); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Date of Birth<span class="f_req">*</span></label>
                                          <?php echo form_input('dob',$fdob['value']); ?>
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
										<th>User Name</th>
										<th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
										<th>Phone</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
                                <?php
								$sno = 0;
								if(isset($records)){
								foreach($records as $row){
									$sno = $sno + 1;
								 ?>
									<tr>
										<td><?php echo $sno; ?> </td>
										<td><?php echo $row['user_name']; ?></td>
										<td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
										<td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['mobile']; ?></td>
										<td><?php echo $row['phone']; ?></td>
										<td><a href="<?php echo base_url(); ?>/user/edit_user/<?php echo $row['id']; ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
											<a href="#" title="Delete"><i class="icon-trash"></i></a></td>
									</tr>
								<?php } } ?>	
								</tbody>
							</table>
                           <p><?php echo $links; ?></p>
                        </div>
                    </div>
                        
                </div>
                
            </div>
            
		<?php include("includes/sidebar.php"); ?>	