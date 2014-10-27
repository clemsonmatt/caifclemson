<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="container">
    <div class="row-fluid">
        <div class="well span8">
            <h3>Student-Host Pairing</h3>
            <a href="<?php echo base_url().'manage/auto_pair'; ?>" style="color:#FFF;"><button class="btn btn-info">Auto Pair</button></a>
        </div>
        <div class="span3">
            <ul class="nav nav-list">
                <li class="nav-header">Administrative Tools</li>
                <li><h5><a href="<?php echo base_url().'manage'; ?>">Manage Home</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/events'; ?>">Manage Events</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/photos'; ?>">Manage Photos</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/rsvp'; ?>">Manage RSVP Events</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/email'; ?>">Send Email</a></h5></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <!-- show hosts -->
        <div class="well span6">
            <h4>Hosts</h4>
            <table class="table table-striped">
                <thead>
                    <th>Name (#)</th>
                    <th>Country Pref.</th>
                    <th>Gender Pref.</th>
                    <th><button class="hide_info btn btn-info">Hide</button></th>
                </thead>
                <?php
                    $host_used = array();
                    $stu_used = array();
                    if(isset($students)){
                        foreach($students as $stu){
                            if($stu['host_id']!=0){
                                array_push($host_used,$stu['host_id']);
                                array_push($stu_used,$stu['id']);
                            }
                        }
                    }
                ?>
                <?php if(isset($hosts)){ $i=1; foreach($hosts as $host): ?>
                    <tr>
                        <td>
                            <strong> 
                                <a href="<?php echo base_url().'manage/view_host/'.$host['id']; ?>" 
                                style=" <?php if(strcmp(strtolower($host['city']),'greenville') == 0){ echo 'color:#090'; } else { echo 'color:#333'; } ?>">
                                    <?php echo $host['name']; ?>
                                </a>
                            </strong>
                            <div id="host_pair<?php echo $i; ?>" class="host_pair" style="display:none;">
                                <br />
                                <form method="post" action="<?php echo base_url().'manage/host_choice/'.$host['id']; ?>">
                                    <?php 
                                        if ($host['students'] == 'One') {
                                            $num = 1;
                                        } elseif ($host['students'] == 'Two') {
                                            $num = 2;
                                        } elseif ($host['students'] == 'Three') {
                                            $num = 3;
                                        } elseif ($host['students'] == 'Four') {
                                            $num = 4;
                                        } elseif ($host['students'] == 'Five') {
                                            $num = 5;
                                        } elseif ($host['students'] == 'Six') {
                                            $num = 6;
                                        } else {
                                            $num = 8;
                                        }
                                    ?>
                                    <input type="hidden" name="num" value="<?php echo $num; ?>" />
                                    <?php $already_sel = array(); ?>
                                    <?php $person_counter = 0; for($j=0;$j<$num;$j++): ?>
                                        <?php $taken = 0; ?>
                                        <select id="host" name="host-stu[]">
                                            <option value="0"> </option>
                                            <?php if(in_array($host['id'],$host_used)){ ?>
                                                <?php if(isset($students)){ foreach($students as $stu): ?>
                                                    <?php if(!in_array($stu['id'],$stu_used) || $stu['host_id']==$host['id']){ ?>
                                                        <option 
                                                            <?php 
                                                                if(!in_array($stu['id'],$already_sel)){ 
                                                                    if($taken==0){ 
                                                                        if($stu['host_id']==$host['id']){ 
                                                                            echo 'selected'; 
                                                                            $taken++; 
                                                                            $person_counter++; 
                                                                            array_push($already_sel,$stu['id']);
                                                                            //array_push($stu_used,$stu['id']);
                                                                        } 
                                                                    } 
                                                                } 
                                                            ?> 
                                                            value="<?php echo $stu['id']; ?>">
                                                                <?php echo $stu['first_name'].' '.$stu['last_name']; ?>
                                                        </option>
                                                    <?php } ?>
                                                <?php endforeach; } ?>
                                            <?php }else{ ?>
                                                <?php if(isset($students)){ foreach($students as $stu): ?>
                                                    <?php if(!in_array($stu['id'],$stu_used)): ?>
                                                        <option value="<?php echo $stu['id']; ?>"><?php echo $stu['first_name'].' '.$stu['last_name']; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; } ?>
                                            <?php } ?>
                                        </select>   
                                    <?php endfor; ?>
                                    <br />
                                    <input class="btn btn-small btn-success" type="submit" name="submit" value="<?php if(in_array($host['id'],$host_used)){ echo 'Update Pairing'; }else{ echo 'Save Pairing'; } ?>" />
                                </form>
                            </div>
                        </td>
                        <td><?php echo $host['country']; ?></td>
                        <td>
                            <?php if($host['type_stu']==0){ echo 'None'; }
                                  elseif($host['type_stu']==1){ echo 'Female(s)'; }
                                  elseif($host['type_stu']==2){ echo 'Male(s)'; }
                                  elseif($host['type_stu']==3){ echo 'Married'; }
                                  else{ 'None'; }
                            ?>
                        </td>
                        <td>
                            <?php if($num == $person_counter){ ?>
                                <input class="edit_host btn" type="button" target="<?php echo $i; ?>" value="Edit" />
                            <?php }else{ ?>
                                <input class="edit_host btn btn-primary" type="button" target="<?php echo $i; ?>" value="Pair" />
                            <?php } ?>
                        </td>
                    </tr>
                <?php $i++; endforeach; } ?>
            </table>
        </div><!-- span6 -->
        <!-- show students -->
        <div class="well span5">
            <h4>Students</h4>
            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Gender</th>
                    <th><button class="hide_info2 btn btn-info">Hide</button></th>
                </thead>
                <?php $i=1; if(isset($unpaired_students)){ foreach($unpaired_students as $stu): ?>
                    <tr>
                        <td>
                            <a href="<?php echo base_url().'manage/view_student/'.$stu['id']; ?>" style="color:#333;">
                                <strong style=" <?php if(strcmp(strtolower($stu['city']),'greenville') == 0){ echo 'color:#090'; } ?> ">
                                    <?php echo $stu['first_name'].' '.$stu['last_name']; ?>
                                </strong>
                            </a>
                            <div id="stu_pair<?php echo $i; ?>" class="stu_pair" style="display:none;">
                                <br />
                                <form method="post" action="<?php echo base_url().'manage/stu_choice/'.$stu['id']; ?>">
                                    <select class="span2" id="stu" name="stu-host">
                                        <option value="0"> </option>
                                        <?php if(isset($hosts)){ foreach($hosts as $host): 
                                            if($host['students']=='One') 
                                                $num = 1;
                                            elseif($host['students']=='Two')
                                                $num = 2;
                                            elseif($host['students']=='Three')
                                                $num = 3;
                                            else
                                                $num = 4;
                                        ?>
                                            <option <?php if($stu['host_id']==$host['id']){ echo 'selected'; } ?> value="<?php echo $host['id']; ?>"><?php echo $host['name'].' ('.$num.')'; ?></option>
                                        <?php endforeach; } ?>
                                    </select>
                                    <br />
                                    <input class="btn btn-small btn-success" type="submit" value="<?php if($stu['host_id']!=0){ echo 'Update Pairing'; }else{ echo 'Save Pairing'; } ?>" />
                                </form>
                            </div>
                        </td>
                        <td><?php echo $stu['home_country']; ?></td>
                        <td><?php if($stu['gender']==0){ echo 'Male'; }else { echo 'Female'; } ?></td>
                        <td>
                            <?php if(in_array($stu['id'],$stu_used)){ ?>
                                <input class="edit_stu btn" type="button" target="<?php echo $i; ?>" value="Edit" />
                            <?php }else{ ?>
                                <input class="edit_stu btn btn-primary" type="button" target="<?php echo $i; ?>" value="Pair" />
                            <?php } ?>
                        </td>
                    </tr>
                <?php $i++; endforeach; } ?>
                <?php 
                    $i=count($unpaired_students)+1; 
                    if(isset($students)){ 
                        foreach($students as $stu): 
                            if($stu['host_id'] != 0){
                ?>
                    <tr>
                        <td>
                            <a href="<?php echo base_url().'manage/view_student/'.$stu['id']; ?>" style="color:#333;">
                                <strong style=" <?php if(strcmp(strtolower($stu['city']),'greenville') == 0){ echo 'color:#090'; } ?> ">
                                    <?php echo $stu['first_name'].' '.$stu['last_name']; ?>
                                </strong>
                            </a>
                            <div id="stu_pair<?php echo $i; ?>" class="stu_pair" style="display:none;">
                                <br />
                                <form method="post" action="<?php echo base_url().'manage/stu_choice/'.$stu['id']; ?>">
                                    <select class="span2" id="stu" name="stu-host">
                                        <option value="0"> </option>
                                        <?php if(isset($hosts)){ foreach($hosts as $host): 
                                            if($host['students']=='One') 
                                                $num = 1;
                                            elseif($host['students']=='Two')
                                                $num = 2;
                                            elseif($host['students']=='Three')
                                                $num = 3;
                                            else
                                                $num = 4;
                                        ?>
                                            <option <?php if($stu['host_id']==$host['id']){ echo 'selected'; } ?> value="<?php echo $host['id']; ?>"><?php echo $host['name'].' ('.$num.')'; ?></option>
                                        <?php endforeach; } ?>
                                    </select>
                                    <br />
                                    <input class="btn btn-small btn-success" type="submit" value="<?php if($stu['host_id']!=0){ echo 'Update Pairing'; }else{ echo 'Save Pairing'; } ?>" />
                                </form>
                            </div>
                        </td>
                        <td><?php echo $stu['home_country']; ?></td>
                        <td><?php if($stu['gender']==0){ echo 'Male'; }else { echo 'Female'; } ?></td>
                        <td>
                            <?php if(in_array($stu['id'],$stu_used)){ ?>
                                <input class="edit_stu btn" type="button" target="<?php echo $i; ?>" value="Edit" />
                            <?php }else{ ?>
                                <input class="edit_stu btn btn-primary" type="button" target="<?php echo $i; ?>" value="Pair" />
                            <?php } ?>
                        </td>
                    </tr>
                <?php $i++; } endforeach; } ?>
            </table>
        </div><!-- span6 -->
    </div><!-- row-fluid -->
</div>
<script type="text/javascript">
jQuery(function(){
    jQuery('.edit_host').click(function(){
        jQuery('.host_pair').hide();
        jQuery('#host_pair'+$(this).attr('target')).show();
    });
    jQuery('.hide_info').click(function(){
        jQuery('.host_pair').hide();
    });
    jQuery('.edit_stu').click(function(){
        jQuery('.stu_pair').hide();
        jQuery('#stu_pair'+$(this).attr('target')).show();
    });
    jQuery('.hide_info2').click(function(){
        jQuery('.stu_pair').hide();
    });
});
</script>
</body>
</html>