<!DOCTYPE html>
<html>
<head>

    <title>Add task</title>
</head>
<body>
<?php include('_Layout.php');?>
<div class="container" style="margin: 0px;">
    <h2>Manage account</h2>
    <div class="message">
                    <?php if(isset($messages)){
                        foreach($messages as $message){
                            echo $message;
                        }
                    }
                    ?>
                </div>
    <div style="width:100%;margin-bottom:3em;">
            <form method="post"  action="updateUser">
            <input hidden name="email" value="<?php echo $model->getEmail();?>">
            <input hidden name="password_b" value="<?php echo $model->getPassword();?>">
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">New password</label>
                    <input class="tsk-input" type="password" name="password" placeholder="" value="">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Confirm Password</label>
                    <input class="tsk-input" type="password" name="confirmedPassword" placeholder="" value="">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Name</label>
                    <input class="tsk-input" type="text" name="name" placeholder="" value="<?php echo $model->getName();?>">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Surname</label>
                    
                    <input class="tsk-input" type="test" name="surname" placeholder="" value="<?php echo $model->getSurname();?>">
                </div>
                <div class="tsk-edit-div">
                    <label class="tsk-edit-label">Phone</label>
                    <input class="tsk-input" type="number" name="phone" placeholder="0" value="<?php echo $model->getPhone();?>">
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
