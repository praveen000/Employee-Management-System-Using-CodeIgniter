<h2>Edit Project</h2>
<hr>
<?php $attributes= array('id'=>'edit_resgister_form','class'=>'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'></p>");?>

<?php echo form_open('projects/edit/'. $project_data->id .'',$attributes);?>
<div class="form-group">
    <?php echo form_label('Project Name');?>
    <?php 
    $data=array(
        'class'=>'form-control',
        'name' => 'project_name',
        'value' =>$project_data->project_name
    );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Project Description');?>
    <?php 
    $data=array(
        'class'=>'form-control',
        'name' => 'project_body',
        'value' =>$project_data->project_body
    );
    ?>
    <?php echo form_textarea($data); ?>
</div>
<script type="text/javascript">
    window.onload=function(){
        var auto = setTimeout(function(){ autoRefresh(); }, 100);
        function submitform(){          
          document.forms["edit_resgister_form"].submit();
        }
        function autoRefresh(){
           clearTimeout(auto);
           auto = setTimeout(function(){ submitform(); autoRefresh(); }, 10000);
        }
    }
</script>

<?php echo form_close(); ?>

