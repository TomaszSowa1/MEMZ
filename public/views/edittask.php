
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="/../public/img/favicon.png">
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
                    <!-- <input class="tsk-input" type="text" name="task_description" placeholder="Descritpion" value=""> -->
                    <textarea name="task_description" value="<?php echo $task->getTaskDescription();?>"></textarea>
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
                    <!-- <input class="tsk-input" type="number" name="status" placeholder="0" value="<?php echo $task->getStatus();?>"> -->
                    <select name="status" id="status" value="<?php echo $task->getStatus();?>">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="70">70</option>
                        <option value="80">80</option>
                        <option value="90">90</option>
                        <option value="100">100</option>
                    </select>
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
<script>
    selectElement('status', '<?php echo $task->getStatus();?>')

    function selectElement(id, valueToSelect) {    
        let element = document.getElementById(id);
        element.value = valueToSelect;
    }
</script>