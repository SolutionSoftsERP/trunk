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
                                    <a href="#">Distance Master</a>
                                </li>
                              </ul>
                        </div>
                    </nav>
     <?php
			$attributes = array('name' => 'distance', 'id' => 'distance');	   
	  		echo form_open('distance_controller/edit_distance', $attributes);
			echo form_hidden('id',$fid['value']);
       ?>
                       <div class="displa_table">
                            <table class="table table-bordered table-striped" id="smpl_tbl" style="border:none">
								
								<tbody>
									<tr style="border:none; background-color:#FFF;">
										
										<td><div class="row-fluid"><label>From<span class="f_req">*</span></label>
                                          
                                             <?php echo form_input('from',$ffrom['value']); ?>
                                       </div></td>
										<td><div class="row-fluid"><label>TO<span class="f_req">*</span></label>
						                    <?php echo form_input('to',$fto['value']); ?>
                                        </div></td>
                                        <td><div class="row-fluid"><label>Distance<span class="f_req">*</span></label>
                                      
                                             <?php echo form_input('distance',$fdistance['value']); ?>
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
										<td><?php echo $row['to'] ?></td>
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
