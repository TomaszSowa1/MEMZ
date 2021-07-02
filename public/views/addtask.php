
<!DOCTYPE html>

<html>
<head>
    <link rel="icon" type="image/png" href="/../public/img/favicon.png">
    <!-- <link rel="stylesheet" type="text/css" href="public/css/tasks.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css"> -->
    <title>Add task</title>
</head>
<body>
<?php include('_Layout.php');?>
<div class="container" style="margin: 0px;">
    <h2>Add task</h2>
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
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Topic</label>
                    <input class="tsk-input" type="text" name="task_topic" placeholder="Topic">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Descritpion</label>
                    <!-- <input class="tsk-input" type="text" name="task_description" placeholder="Descritpion"> -->
                    <textarea name="task_description" value=""></textarea>
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Create Date</label>
                    <input class="tsk-input" type="date" name="create_date" placeholder="">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">End Date</label>
                    <input class="tsk-input" type="date" name="planned_end_date" placeholder="">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Status</label>
                    <!-- <input class="tsk-input" type="number" name="status" placeholder="0"> -->
                    <select name="status" id="status" >
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
                    <input class="tsk-input" type="text" name="status_reason" placeholder="Status Reason">
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
