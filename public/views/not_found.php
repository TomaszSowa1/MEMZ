
<head>
<link rel="icon" type="image/png" href="/../public/img/favicon.png">
  <link href="/../public/css/error.css" rel="stylesheet">
</head>
<body>
  <div class="mainbox">
    <div class="err"><p style="margin-top:1em;margin-bottom:0;">404</p></div>
    <div class="msg">Strony nie odnaleziono</div>
    <?php
        session_start();
        if (session_id() == '' || !isset($_SESSION['login'])) { 
    ?>
    <div class="msg">
        <a href="/login">LOGIN</a>
    </div>
    <div class="msg">
        <a href="/register">REGISTER</a>
    </div>
    <?php } else { ?>
        <div class="msg">
        <a href="/mainpage">Main Page</a>
    </div>
    <?php }?>
  </div>
</body> 

