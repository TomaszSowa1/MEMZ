<?php
session_start(); //gets session id from cookies, or prepa
if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists
    return $this->render('login');
} else {
//   
?>
<!DOCTYPE html>
<head>
    <link rel="icon" type="image/png" href="/../public/img/favicon.png">
    <!-- <link rel="stylesheet" type="text/css" href="public/css/tasks.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css"> -->
    <title>Add task</title>
</head>
<body>
<?php include('_Layout.php');?>
    <div class="container">
        <h1 style="font: size 30em;">Witaj,<?php echo $_SESSION['login'];?></h1>

    </div>
</body>
<?}?>