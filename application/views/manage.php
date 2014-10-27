<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="container">
	<div class="tabbable span12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Student List</a></li>
            <li><a href="#tab2" data-toggle="tab">Host Family List</a></li>
        </ul>
        <!-- student list -->
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <div class="row">	
                    <div class="well span11">
                        <div class="row">
                            <div class="span8">
                                <h3>Student List</h3>
                                <!-- download button -->
                                <form method="post" action="<?php echo base_url().'manage/download_stu'; ?>" id="download">
                                    <button class="btn btn-submit" type="submit" value="Download" name="download">
                                    <i class="icon-download"></i> Download
                                    </button>
                                </form>
                                <!-- add student -->   
                                <a href="<?php echo base_url().'host/stu_form'; ?>" style="color:#FFF;">                            
                                	<button class="btn btn-success" value="add_student" name="add_stu">
                                	<i class="icon-plus icon-white"></i> Add Student
                                	</button>                                
                                </a>
                            </div>
                            <div class="span3">
                                <ul class="nav nav-list">
                                    <li class="nav-header">Administrative Tools</li>
                                    <li><h5><a href="<?php echo base_url().'manage/email'; ?>">Send Email</a></h5></li>
                                    <li><h5><a href="<?php echo base_url().'manage/photos'; ?>">Manage Photos</a></h5></li> 
                                    <li><h5><a href="<?php echo base_url().'manage/events'; ?>">Manage Events</a></h5></li> 
                                    <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li>
                                    <li><h5><a href="<?php echo base_url().'manage/rsvp'; ?>">Manage RSVP Events</a></h5></li>
                                    <li><h5><a href="<?php echo base_url().'manage/pair'; ?>">Pair Student-Host</a></h5></li>
                                </ul>
                            </div>           
                            <div style="height:400px; overflow:auto;" class="span11">
                                <table class='table table-striped'>
                                    <thead>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Host Family</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach($students as $student): ?>
                                        <tr>
                                            <td><?php echo $i; $i++; ?></td>
                                            <td style="max-width: 120px;">
                                                <a href="<?php echo base_url().'manage/view_student/'.$student['id'] ?>" 
                                                style=" <?php if(strcmp(strtolower($student['city']),'greenville') == 0){ echo 'color:#090'; }else{ echo 'color:#FF8500'; } ?>">
                                                    <?php echo $student['first_name'].' '.$student['last_name']; ?>
                                                </a>
                                            </td>
                                            <td style="max-width: 120px;"><?php foreach($hosts as $host){ if($host['id'] == $student['host_id']){ echo $host['name']; } } ?></td>
                                            <td><?php echo $student['phone']; ?></td>
                                            <td><?php echo $student['email']; ?></td>
                                            <td><a href="<?php echo base_url().'manage/edit_stu/'.$student['id']; ?>" style="color:#000"><button class="btn btn-mini"><i class="icon-edit"></i > Edit</button></a></td>
                                            <td><a href="<?php echo base_url().'manage/remove_stu/'.$student['id']; ?>" style="color:#FFF;"><button class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i> Remove</button></a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- row -->
                    </div><!-- well -->
                </div>
            </div><!-- tab1 -->
            <!-- host list -->
            <div class="tab-pane" id="tab2">
            	<div class="row">	
                    <div class="well span11">
                        <div class="row">
                            <div class="span8">
                                <h3>Host Family List</h3>
                                <!-- download button -->
                                <form method="post" action="<?php echo base_url().'manage/download_host'; ?>" id="download">
                                    <button class="btn btn-submit" type="submit" value="Download" name="download">
                                    <i class="icon-download"></i> Download
                                    </button>
                                </form>
                                <!-- add student -->
                                <a href="<?php echo base_url().'host/host_form'; ?>" style="color:#FFF;">
                                	<button class="btn btn-success" value="add_student" name="add_stu">
                                	<i class="icon-plus icon-white"></i> Add Host
                                	</button>
                                </a>                                
                            </div>
                            <div class="span3">
                                <ul class="nav nav-list">
                                    <li class="nav-header">Administrative Tools</li>
                                    <li><h5><a href="<?php echo base_url().'manage/photos'; ?>">Manage Photos</a></h5></li> 
                                    <li><h5><a href="<?php echo base_url().'manage/events'; ?>">Manage Events</a></h5></li> 
                                    <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li>
                                    <li><h5><a href="<?php echo base_url().'manage/rsvp'; ?>">Manage RSVP Events</a></h5></li>
                                    <li><h5><a href="<?php echo base_url().'manage/pair'; ?>">Pair Student-Host</a></h5></li>
                                </ul>
                            </div>           
                            <div style="height:400px; overflow:auto;" class="span11">
                                <table class='table table-striped'>
                                    <thead>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Host Family's Student(s)</th>
                                        <th>Cell Phone</th>
                                        <th>Email</th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach($hosts as $host): $used_stu = array(); ?>
                                        <tr>
                                            <td><?php echo $i; $i++; ?></td>
                                            <td style="max-width:120px;">
												<a href="<?php echo base_url().'manage/view_host/'.$host['id'] ?>" 
                                                style="<?php if(strcmp(strtolower($host['city']),'greenville') == 0){ echo 'color:#090'; }else{ echo 'color:#FF8500'; } ?>">
													<?php echo $host['name']; ?>
												</a>
                                            </td>
                                            <td style="max-width:120px;">
												<?php foreach($students as $stu){ 
														if($stu['host_id'] == $host['id']){ 
															if(!in_array($stu['first_name'].' '.$stu['last_name'],$used_stu)){
																array_push($used_stu, $stu['first_name'].' '.$stu['last_name']); 
															}
														} 
													} 
													echo implode(", ",$used_stu);
												?>
                                            </td>
                                            <td><?php echo $host['mobile_phone']; ?></td>
                                            <td style="overflow:hidden; max-width:130px; overflow-style:ellipsis;"><?php echo $host['email']; ?></td>
                                            <td><a href="<?php echo base_url().'manage/edit_host/'.$host['id']; ?>" style="color:#000"><button class="btn btn-mini"><i class="icon-edit"></i > Edit</button></a></td>
                                            <td><a href="<?php echo base_url().'manage/remove_host/'.$host['id']; ?>" style="color:#FFF;"><button class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i> Remove</button></a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- row -->
                    </div><!-- well -->
                </div>
            </div><!-- tab2 -->
        </div><!-- tab content -->
    </div><!-- tabbable -->
</div>
<br /><br />
</body>
</html>