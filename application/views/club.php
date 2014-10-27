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
        	<h4>International Club</h4>
            <table class="table table-striped">
            	<thead>
                	<th class="span2">Title</th>
                    <th>Info</th>
                    <th class="span2"></th>
                    <?php if($admin==1){ echo '<th></th>'; } ?>
                </thead>
                <tbody>
                	<?php if(isset($clubs)){ foreach($clubs as $club): ?>
                    	<tr>
                        	<td><?php echo '<h5><a href="'.base_url().'events/show_club/'.$club['id'].'">'.$club['title'].'</a></h5>'; ?></td>
                            <td style="max-width:125px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis"><?php echo $club['when'].'<br />'.$club['time']; ?></td>
                            <td><a href="<?php echo base_url().'events/show_club/'.$club['id']; ?>"><button class="btn">More Info &raquo;</button></a></td>
                            <?php if($admin==1){ echo '<td><a href="'.base_url().'events/delete_club/'.$club['id'].'"><button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button></a></td>'; } ?>
                        </tr>
                    <?php endforeach; } ?>
                </tbody>
            </table>
        </div><!-- span8 -->
        <div class="span4">
        	 <div class="well-small">
                <ul class="nav nav-list">
                    <li class="nav-header">Latest News</li>
                    <li><h5><a href="<?php echo base_url().'events'; ?>">Events Home</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/newsletters'; ?>">Newsletters</a></h5></li>  
                    <li><h5><a href="<?php echo base_url().'events/photos'; ?>">Photo Gallery</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/eng_class'; ?>">Conversational Eng. Class</a></h5></li>
                    <li><h5><a href="http://pickens.alc.schoolfusion.us/modules/cms/pages.phtml?pageid=36278&sessionid=f742abc4f25b24374e6d86b1f21dae5c" target="_blank">Adult Learning Center</a></h5></li>
                </ul>
            </div>
        </div><!-- span4 -->
    </div><!-- row-fluid -->
    <?php if($admin==1): ?>
    	<br />
       	<a href="<?php echo base_url().'events/new_club'; ?>"><button type="button" class="btn btn-success"><i class="icon-plus icon-white"></i> Add Opportunity</button></a>
    <?php endif; ?>
</div>
</body>
</html>