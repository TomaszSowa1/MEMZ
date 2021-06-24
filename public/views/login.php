<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="public/css/main-style.css" type="text/css">
    <title>LOGON PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img class="logo-img" src="public/img/logo.svg">
        </div>
        <br>
        <br>
        <div class="login-container">
            <form action="login" method="POST">
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
                <div class="login-btn"><button type="submit"></button></div>
            </form>
        </div>  
    </div>
</body>