<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/tasks.php';
require_once __DIR__.'/../repository/tasksRepository.php';

class tasksController extends AppController
{
    private $message = [];
    private $tasksRepository;

    public function __construct()
    {
        parent::__construct();
        $this->tasksRepository = new tasksRepository();
    }
    public function alltasks(){
        if ($this->isGet()) {
            //$UserId= current id 
            $UserId=1;
            $tasks=$this->tasksRepository->getalltasks($UserId);
            return $this->render('alltasks',['tasks' => $tasks]);
        }
    }

    public function addtask()
    {
        if ($this->isPost()) {
            //get user id 
            $UserId=1;
            $actual_end_date=null;
            $canceled=false;
            //getDate(strtotime("2011/05/21"))
            //echo   $_POST['task_topic'].' | '. $_POST['task_description'].' | '. $_POST['create_date'].' | '. $_POST['planned_end_date'].' | '. $actual_end_date.' | '. $_POST['status'].' | '. $_POST['status_reason'].' | '. $canceled;
            $task = new tasks(0, $UserId, $_POST['task_topic'], $_POST['task_description'], $_POST['create_date'], $_POST['planned_end_date'], $actual_end_date, $_POST['status'], $_POST['status_reason'], $canceled);

            $result=$this->tasksRepository->createtasks($task);
            echo $result;
            if($result)
            {
                $url="http://$_SERVER[HTTP_HOST]";
                header("Location: {$url}/alltasks");
            }
        }else{
            return $this->render('addtask', ['messages' => $this->message]);
        }
    }

    public function edittask()
    {
        if ($this->isGet()) {
            $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $action = explode("/",$url);
            $id=end($action);
            if($id==null){
                $url="http://$_SERVER[HTTP_HOST]";
                header("Location: {$url}/alltasks");
            }
            $task=$this->tasksRepository->gettask($id);
            return $this->render('edittask', ['task' => $task]);
        }
        elseif ($this->isPost()) {
            //get user 
            $UserId=1;
            $actual_end_date=null;
            $canceled=0;
            if($_POST['status']==100){
                $actual_end_date=date();
            }
            $task = new tasks($_POST['taskId'], $UserId, $_POST['task_topic'], $_POST['task_description'], $_POST['create_date'], $_POST['planned_end_date'], $actual_end_date, $_POST['status'], $_POST['status_reason'], 0);
            $result=$this->tasksRepository->edittasks($task);
            
            $url="http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/alltasks");
        }else{
            return $this->render('edittask', ['messages' => $this->message]);
        }
    }

}