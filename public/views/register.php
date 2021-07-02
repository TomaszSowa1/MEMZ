<!DOCTYPE html>

<head>
<link rel="icon" type="image/png" href="/../public/img/favicon.png">
    <link rel="stylesheet" href="public/css/main-style.css" type="text/css">
    <script type="text/javascript" src="/../public/js/script.js" defer></script>
    <title>REGISTER</title>
</head>
<body>
    <div class="container">
        <div class="logo" style="width:40%;" >
            <img class="logo-img" style="width:50%;" src="public/img/logo.svg">
        </div>
        <br>
        <br>
        <div class="login-container" style="height:600px;">
            <form action="register" method="POST">
                <div class="message">
                    <?php if(isset($messages)){
                        foreach($messages as $message){
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input class="myclass"  type="text" name="email" placeholder="email@email.com">
                <input class="myclass"  type="password" placeholder="password" name="password">
                <input class="myclass"  name="confirmedPassword" type="password" placeholder="confirm password">
                <input class="myclass"  name="name" type="text" placeholder="name">
                <input class="myclass"  name="surname" type="text" placeholder="surname">
                <input class="myclass"  name="phone" type="text" placeholder="phone">
                <div class="login-btn"><button type="submit"></button></div>
            </form>
        </div>  
        <div class="registerbtn" onclick="location.href='login'" >You already have account? Login</div>
    </div>
</body>