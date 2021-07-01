<!DOCTYPE html>
<html>
<head>

    <title>Add task</title>
</head>
<body>
<?php include('_Layout.php');?>
<div class="container" style="margin: 0px;">
    <h2>Edit task</h2>
    <div class="message">
                    <?php if(isset($messages)){
                        foreach($messages as $message){
                            echo $message;
                        }
                    }
                    ?>
                </div>
    <div style="width:100%;margin-bottom:3em;">
            <form method="post"  action="addtask">
                <input hidden name="taskId" value="<?php echo $task->getTaskId();?>">
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Topic</label>
                    <input class="tsk-input" type="text" name="task_topic" placeholder="Topic" value="<?php echo $task->getTaskTopic();?>">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Descritpion</label>
                    <input class="tsk-input" type="text" name="task_description" placeholder="Descritpion" value="<?php echo $task->getTaskDescription();?>">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Create Date</label>
                    <input class="tsk-input" readonly="readonly" type="date" name="create_date" placeholder="" value="<?php echo $task->getCreateDate();?>">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">End Date</label>
                    
                    <input class="tsk-input" type="date" name="planned_end_date" placeholder="" value="<?php echo $task->getPlannedEndDate();?>">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Status</label>
                    <input class="tsk-input" type="number" name="status" placeholder="0" value="<?php echo $task->getStatus();?>">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Status Reason</label>
                    <input class="tsk-input" type="text" name="status_reason" placeholder="Status Reason" value="<?php echo $task->getStatusReason();?>">
                </div>
                <div style="margin:20px;">
                    <button id="formButton" type="submit" class="btn btn-outline-primary">
                    </button>
                </div>
            </form>
    </div>
</div>
</body>
</html>
