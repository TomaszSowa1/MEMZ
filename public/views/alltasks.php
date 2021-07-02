
<!DOCTYPE html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="public/css/tasks.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css"> -->
    <link rel="icon" type="image/png" href="/../public/img/favicon.png">
    <title>tasks</title>
</head>

<body>
    <div class="container">
        <?php include('_Layout.php'); ?>
        <main role="main" class="main">
            <h2>My Tasks</h2>
            <table>
                <tr>
                    <th>
                        task topic
                    </th>
                    <th>
                        task description
                    </th>
                    <th>
                        create date
                    </th>
                    <th>
                        planned end date
                    </th>
                    <th>
                        status
                    </th>
                    <th>
                        status reason
                    </th>
                    <th>
                        action
                    </th>
                </tr> 
                <?php foreach($tasks as $task): ?>
                <tr>
                    <td>
                        <?= $task->getTaskTopic(); ?>
                    </td>
                    <td>
                        <?= $task->getTaskDescription(); ?>
                    </td>
                    <td>
                        <?= $task->getCreateDate(); ?>
                    </td>
                    <td>
                        <?= $task->getPlannedEndDate(); ?>
                    </td>
                    <td>
                        <?= $task->getStatus(); ?>
                    </td>
                    <td>
                        <?= $task->getStatusReason(); ?>
                    </td>
                    <td>
                        <a  href="/edittask/<?echo $task->gettaskId(); ?>">EDIT</a>
                        
                    </td>
                </tr>
                <?php endforeach; ?>
            </table> 
        </main>
    </div>
</body>
