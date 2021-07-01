<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/tasks.css">

    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>taskS</title>
</head>

<body>
<div class="base-container">
    <nav>
        <img src="public/img/logo.svg">
        <ul>
            <li>
                <i class="fas fa-task-diagram"></i>
                <a href="#" class="button">tasks</a>
            </li>
            <li>
                <i class="fas fa-task-diagram"></i>
                <a href="#" class="button">tasks</a>
            </li>
            <li>
                <i class="fas fa-task-diagram"></i>
                <a href="#" class="button">tasks</a>
            </li>
            <li>
                <i class="fas fa-task-diagram"></i>
                <a href="#" class="button">tasks</a>
            </li>
        </ul>
    </nav>
    <main>
        <header>
            <div class="search-bar">
                <form>
                    <input placeholder="search task">
                </form>
            </div>
            <div class="add-task">
                <i class="fas fa-plus"></i> add task
            </div>
        </header>
        <section class="task-form">
            <h1>UPLOAD</h1>
            <form action="addtask" method="POST" ENCTYPE="multipart/form-data">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="title" type="text" placeholder="title">
                <textarea name="description" rows=5 placeholder="description"></textarea>

                <input type="file" name="file"/><br/>
                <button type="submit">send</button>
            </form>
        </section>
    </main>
</div>
</body>