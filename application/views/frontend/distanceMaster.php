

<?php include("includes/header.php"); ?>
<script src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"/>
<script src="<?php echo base_url(); ?>js/jquery.validate.js" type="text/javascript"/>
<script>
            $(document).ready(function(){
                
    //* validation
    $('#destination').validate({
     onkeyup: false,
     errorClass: 'error',
     validClass: 'valid',
     rules: {
      from: { required: true, },
      to: { required: true, },
      distance:{ required: true,},
      
      
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
                                    <a href="#">Distance Master</a>
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
        	
			$attributes = array('name' => 'distance', 'id' => 'distance');	   
	  		echo form_open('distance_controller/addDistance' , $attributes);
			

       ?>
                        
                        <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>From<span class="f_req">*</span></label>
                                           <?php $atts = array(
													  'name' => 'from',
													  'id'   => 'from',
													  'size' => 50
													  
													  
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                            
                                       </div></td>
										<td><div class="row-fluid"><label>To<span class="f_req">*</span></label>
                                        <?php $atts = array(
													  'name' => 'to',
													  'id'   => 'to',
													  'size' => 50
													   
										   ); ?>
						                    <?php echo form_input($atts); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Distance<span class="f_req">*</span></label>
                                       <?php $atts = array(
													'type'=>'number',
													  'name' => 'distance',
													  'id'   => 'distance',
													  'size' => 35
													
										   ); ?>
                                             <?php echo form_input($atts); ?>
                                        </div></td>
									</tr>
									
                                    <tr>
											<td rowspan="3">
                                        <?php   echo form_submit('registration', 'Submit'); ?>
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
										<th>From</th>
										<th>To</th>
                                        					<th>Distance</th>
                                        					<th>Date</th>
					
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
										<td><?php echo $row['from']; ?></td>
										<td><?php echo $row['to']; ?></td>
										<td><?php echo $row['distance']; ?></td>
                                        <td><?php echo $row['create_date']; ?></td>
																				<td><a href="<?php echo base_url(); ?>/index.php?distance_controller/edit_distance/<?php echo $row['id']; ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
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

