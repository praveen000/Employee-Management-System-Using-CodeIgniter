<h2>Edit Task</h2>
<hr>
<?php $attributes= array('id'=>'eidt_task_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'></p>");?>
<?php echo form_open('tasks/edit/'.$this->uri->segment(3) .'',$attributes);?>
<div class="form-group">
    <?php echo form_label('Task Name');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'task_name',
        "value" => $the_task->task_name
    );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Task Description');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'task_body',
        "value" => $the_task->task_body
    );
    ?>
    <?php echo form_textarea($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Task Date');?>
    <?php 
    $data=array(
        "class"=>'form-control',
        "name" => 'due_date',
        "type" => 'date',
        "value" => $the_task->due_date
    );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php
    $data = array(
        "class" => 'btn btn-primary',
        "name" => 'submit',
        "value" => 'Update'
    );
    ?>
    <?php echo form_submit($data); ?>
</div>
<script type="text/javascript">
    window.onload=function(){
        var auto = setTimeout(function(){ autoRefresh(); }, 100);
        function submitform(){
          //alert('project_name');
          document.forms["eidt_task_form"].submit();
        }
        function autoRefresh(){
           clearTimeout(auto);
           auto = setTimeout(function(){ submitform(); autoRefresh(); }, 10000);
        }
    }
</script>
<?php echo form_close(); ?>

