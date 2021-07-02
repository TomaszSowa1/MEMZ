
<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" type="image/png" href="/../public/img/favicon.png">
        <link rel="stylesheet" type="text/css" href="/../public/css/tasks.css">
        <link rel="stylesheet" type="text/css" href="/../public/css/main-style.css">
        <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/../public/js/script.js" defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="topnav" style="width:100%;">
            <a href="/mainpage">Main Page</a>
            <a href="/addtask">Create task</a>
            <a href="/alltasks">My tasks</a>
            <!-- <a href="/updateUser">Manage account</a>  -->
            <a href="/logout" style="float:right;margin-right:2em;">Wyloguj</a>
            <a href="/updateUser" style="float:right;margin-right:2em;"><?php echo "Hi, " . $_SESSION['login'];?></a>
            
        </div>
        <footer>
            <p>Tomasz Sowa ®</p>
        </footer>
        <script>
            function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
            }
        </script>
    </body>
</html>


