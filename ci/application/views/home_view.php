<p class="bg-success">
    <?php if($this->session->flashdata('login_success')):?>    
    <?php echo $this->session->flashdata('login_success');?>
    <?php endif;?>   
    <?php if($this->session->flashdata('user_registered')):?>    
    <?php echo $this->session->flashdata('user_registered');?>
    <?php endif;?>   
</p>
<p class="bg-danger">  
    <?php if($this->session->flashdata('login_failed')):?>    
    <?php echo $this->session->flashdata('login_failed');?>
    <?php endif;?>   
    <?php if($this->session->flashdata('no_access')):?>    
    <?php echo $this->session->flashdata('no_access');?>
    <?php endif;?>    
</p>
<div class="jumbotron">
    <h2 class="text-center">Welcome to Nano Soft App</h2>
</div>
<?php if(isset($projects)):?>
<div class="welcome-area">
   <h2> Project </h2>
</div>
<table class="table table-bordered table-hover">
    <tr>
        <th>Project Name</th>
        <th>Project Body</th>
        <th>Action</th>
    </tr>
    <tbody>
        <?php foreach($projects as $project): ?>
            <tr>
               <td><?php echo $project->project_name;?></td>
               <td><?php echo $project->project_body;?></td>                
               <td><a href="<?php echo base_url();?>projects/display/<?php echo $project->id; ?>"> View</a></td>   
            </tr>
        <?php endforeach;?> 
    </tbody>
</table>
<?php endif;?>