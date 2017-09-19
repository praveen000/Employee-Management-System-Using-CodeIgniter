<h1>Task Display View</h1>
<table class="table table-bordered table-hover">
    <tr>
        <th>Task Name</th>
        <th>Task Body</th>
        <th>Date</th>
    </tr>
    <tbody>        
        <tr>
           <td><?php echo $task->task_name;?>  
           <p>          
              <a href="<?php echo base_url();?>tasks/edit/<?php echo $task->id; ?>">edit</a>
              <a href="<?php echo base_url();?>tasks/delete/<?php echo $task->$project_id ; ?><?php echo $task->$task_id; ?>">delete</a>             
           </p>
           </td>
           <td><?php echo $task->task_body;?></td> 
           <td><?php echo $task->date_created;?></td>                
        </tr>
    </tbody>
</table>

