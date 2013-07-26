

<?php include("includes/header.php"); ?>

<script>
            $(document).ready(function(){
              $('#idate').Zebra_DatePicker();
		 $('#ldotp').Zebra_DatePicker();
		 $('#ldots').Zebra_DatePicker();
		 $('#odtt').Zebra_DatePicker();
		 $('#odft').Zebra_DatePicker();  
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
                                    <a href="#">Tendor Master</a>
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
        	
			$attributes = array('name' => 'tendor', 'id' => 'tendor');	   
	  		echo form_open('tendor/editTendor' , $attributes);
			echo form_hidden('id',$fid['value']);

       ?>
                        
                        <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Tendor For<span class="f_req">*</span></label>
                                             <?php echo form_input('tender_for',$ftender_for['value']); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Location for Tendor Submission<span class="f_req">*</span></label>
                                        	                    <?php echo form_input('lfts',$flocation_for_tender_submission['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Work Station<span class="f_req">*</span></label>
                                             <?php echo form_input('wl',$fwork_location['value']); ?>
                                        </div></td>
									</tr>

						<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Tendor Type<span class="f_req">*</span></label>
                                             <?php echo form_input('tt',$ftender_type['value']); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Tendor No<span class="f_req">*</span></label>
                                        	                    <?php echo form_input('tn',$ftender_no['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Name of Work<span class="f_req">*</span></label>
                                             <?php echo form_input('now',$fname_of_work['value']); ?>
                                        </div></td>
									</tr>

									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>Responsible Person<span class="f_req"></span></label>
                                             <?php echo form_input('rp',$fresponsible_person['value']); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>Work Type<span class="f_req">*</span></label>
                                        	                    <?php echo form_input('wt',$fwork_type['value']); ?>
                                        </div></td>
<td><div class="row-fluid"><label>Tendor Source<span class="f_req">*</span></label>
                                             <?php echo form_input('ts',$ftender_source['value']); ?>
                                            
                                       </div></td>
                                        				</tr>


						<tr style="border:none; background-color:#FFF;">
<td><div class="row-fluid"><label>intimation Date<span class="f_req">*</span></label>
                                             <?php echo form_input('idate',$fintimation_date['value']); ?>
                                        </div></td>
					<td><div class="row-fluid"><label>Last Date of Tendor Purchase<span class="f_req"></span>*</label>
                                             <?php echo form_input('ldotp',$flast_date_of_tender_purchase['value']); ?>
                                        </div></td>
					<td><div class="row-fluid"><label>Last Date of Tendor Submission <span class="f_req">*</span></label>
                                             <?php echo form_input('ldots',$flast_date_of_tender_submission['value']); ?>
                                        </div></td>					
										</tr>
					

						<tr style="border:none; background-color:#FFF;">
<td><div class="row-fluid"><label>Open Date Technicle Tender<span class="f_req">*</span></label>
                                             <?php echo form_input('odtt',$fopen_date_technical_tender['value']); ?>
                                        </div></td>
					<td><div class="row-fluid"><label>Open Date Financial Tender<span class="f_req">*</span></label>
                                             <?php echo form_input('odft',$fopen_date_financial_tender['value']); ?>
                                        </div></td>
					<td><div class="row-fluid"><label>Document Cost<span class="f_req">*</span></label>
                                             <?php echo form_input('dc',$fdocument_cost['value']); ?>
                                        </div></td>					
										</tr>
<tr>				
<td><div class="row-fluid"><label>Tender Value<span class="f_req">*</span></label>
                                             <?php echo form_input('tv',$ftender_value['value']); ?>
                                        </div></td>
					<td><div class="row-fluid"><label>Remarks<span class="f_req">*</span></label>
                                             <?php echo form_input('remarks',$fremarks['value']); ?>
                                        </div></td>					
										</tr>				                                    

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
										<th>TendorFor</th>
										<th>Location For Tender</th>
                                        					<th>Work Station</th>
                                        					<th>intimation Date</th>
										<th>Last Date Of Tender Purchase</th>																								
				<th>Last Date of Tender Submission</th>										
					<th>Open Date Technicle Tender</th>										
										<th>Open Date Financial Tender</th>
														
										
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
										<td><?php echo $row['tender_for']; ?></td>
										<td><?php echo $row['location_for_tender_submission']; ?></td>
										<td><?php echo $row['work_location']; ?></td>
                                        					<td><?php echo $row['intimation_date']; ?></td>
			<td><?php echo $row['last_date_of_tender_purchase']; ?></td>	
<td><?php echo $row['last_date_of_tender_submission']; ?></td>								
<td><?php echo $row['open_date_technical_tender']; ?></td>
									<td><?php echo $row['open_date_financial_tender']; ?></td>
									
<td><a href="<?php echo base_url(); ?>/index.php?tendor/editTendor/<?php echo $row['id']; ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
				<a href="#" title="Delete"><i class="icon-trash"></i></a></td>
									</tr>
								<?php } ?>	
								</tbody>
							</table>
                         <!--<p><?php echo $links; ?></p>-->
                        </div>
                    </div>
                        
                </div>
                
            </div>
            
		<?php include("includes/sidebar.php"); ?>	

