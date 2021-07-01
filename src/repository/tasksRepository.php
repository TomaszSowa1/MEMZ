<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/tasks.php';

class tasksRepository extends Repository{
    public function gettask(int $taskId):?tasks{
        $stmt = $this->database->connect()->prepare('SELECT * FROM public.tasks where taskId=:taskId');
        $stmt->bindParam(':taskId',$taskId,PDO::PARAM_STR);
        $stmt->execute();

        $task=$stmt->fetch(PDO::FETCH_ASSOC);
        if($task==false){
            return null;
        }
        return new tasks(
            $task['taskId'],
            $task['UserId'],
            $task['task_topic'],
            $task['task_description'],
            $task['create_date'],
            $task['planned_end_date'],
            $task['actual_end_date'],
            $task['status'],
            $task['status_reason'],
            $task['canceled']
        );
    }

    public function getalltasks(){
        $stmt = $this->database->connect()->prepare('SELECT * FROM public.tasks ');
        $stmt->execute();

        $task=$stmt->fetch(PDO::FETCH_ASSOC);
        if($task==false){
            return null;
        }

        return $task;
    }

    public function createtasks(tasks $task): tasks
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT into tasks(UserId,task_topic,task_description,create_date,planned_end_date,actual_end_date,status,status_reason,canceled) 
            values (?,?,?,?,?,?,?,?,?)
        ');
        $UserId=1;
        $stmt->execute(
            $UserId,
            $task->getTaskTopic(),
            $task->getTaskDescription(),
            $task->getCreateDate(),
            $task->getPlannedEndDate(),
            $task->getActualEndDate(),
            $task->getStatus(),
            $task->getStatusReason(),
            $task->getCanceled()
        );

    }

    public function edittasks(tasks $task):tasks
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            update tasks set task_topic=?,task_description=?,create_date=?,planned_end_date=?,actual_end_date=?,status=?,status_reason=?,canceled=?
            where taskId=?
        ');
        $UserId=1;
        $stmt->execute(
            $task->getTaskTopic(),
            $task->getTaskDescription(),
            $task->getCreateDate(),
            $task->getPlannedEndDate(),
            $task->getActualEndDate(),
            $task->getStatus(),
            $task->getStatusReason(),
            $task->getCanceled()
        );
    }

}