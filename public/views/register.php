<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="public/css/main-style.css" type="text/css">
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
                <input type="text" name="email" placeholder="email@email.com">
                <input type="password" placeholder="password" name="password">
                <input name="confirmedPassword" type="password" placeholder="confirm password">
                <input name="name" type="text" placeholder="name">
                <input name="surname" type="text" placeholder="surname">
                <input name="phone" type="text" placeholder="phone">
                <div class="login-btn"><button type="submit"></button></div>
            </form>
        </div>  
    </div>
</body>