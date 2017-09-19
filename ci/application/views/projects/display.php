<div class="col-xs-9">
	<h2>Project Name : <?php echo $project_data->project_name;?></h2>
	<p>Posted Date: <?php echo $project_data->date_created;?></p>
	<hr>
	<p><h2>Project Description: </h2><?php echo $project_data->project_body;?></p>
	<!-- Join Table Data show here -->
	<h3> Tasks </h3>
	<?php if($completed_tasks):    ?>
		<ul>
		<?php  foreach ($completed_tasks as $task):?>
			<li>
				<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">				
			    <?php echo $task->task_name; ?>
			    </a>
			</li>
	    <?php endforeach;?>
		<?php else: ?>
			<p>No task here</p>
		</ul>
	<?php endif; ?>

</div>
<div class="col-xs-3 pull-right">
	<ul class="list-group">
		<h4>Project Action</h4>
	  <li class="list-group-item"><a href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id;?>">Create Task</a></li>
	  <li class="list-group-item"><a href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id;?>">Edit Project</a></li>
	  <li class="list-group-item"><a href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id;?>">Delete Project</a></li>
	</ul>
</div>


