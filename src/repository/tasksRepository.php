<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/tasks.php';

class tasksRepository extends Repository{
    public function gettask(int $taskId):?tasks{
        $stmt = $this->database->connect()->prepare('SELECT * FROM public.tasks where "taskId"=:taskId');
        $stmt->bindParam(':taskId',$taskId,PDO::PARAM_INT);
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

    public function getalltasks(int $UserId){
        $tasks=[];
        $stmt = $this->database->connect()->prepare('SELECT * FROM public.tasks where "UserId"=:UserId');
        $stmt->bindParam(':UserId',$UserId,PDO::PARAM_INT);
        $stmt->execute();

        $tasks_res=$stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($tasks_res as $task){
            $tasks[]=new tasks(
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
        // if($tasks==false){
        //     return null;
        // }

        return $tasks;
    }

    public function createtasks(tasks $task)
    {
        $UserId=1;
        $data=[
            'UserId'=>$UserId,
            'task_topic'=>$task->getTaskTopic(),
            'task_desc'=>$task->getTaskDescription(),
            'create_date'=>$task->getCreateDate(),
            'end_date'=> $task->getPlannedEndDate(),
            'actual_end_date'=>null,
            'status'=>$task->getStatus(),
            'status_reas'=>$task->getStatusReason(),
            'canceled'=>0
        ];
        try{
            $stmt = $this->database->connect()->prepare('
            INSERT INTO tasks("UserId",task_topic,task_description,create_date,planned_end_date,actual_end_date,status,status_reason,canceled) 
            VALUES (:UserId,:task_topic,:task_desc,:create_date,:end_date,:actual_end_date,:status,:status_reas,:canceled)
        ')->execute($data);
            return true;
        }catch(Exception $e){
            return $e;
        }

    }

    public function edittasks(tasks $task)
    {
        
        $UserId=1;
        $data=[
            'taskId'=>$task->getTaskId(),
            'task_topic'=>$task->getTaskTopic(),
            'task_desc'=>$task->getTaskDescription(),
            'create_date'=>$task->getCreateDate(),
            'end_date'=> $task->getPlannedEndDate(),
            'actual_end_date'=>null,
            'status'=>$task->getStatus(),
            'status_reas'=>$task->getStatusReason(),
            'canceled'=>0
        ];
        try{
            $stmt = $this->database->connect()->prepare('
            update tasks set task_topic=:task_topic,task_description=:task_desc,create_date=:create_date,planned_end_date=:end_date,actual_end_date=:actual_end_date,status=:status,status_reason=:status_reas,canceled=:canceled
            where "taskId"=:taskId
        ')->execute($data);
            return true;
        }catch(Exception $e){
            var_dump($e);
            return $e;
        }
    }

}