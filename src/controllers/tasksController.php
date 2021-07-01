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

    public function addtask()
    {
        if ($this->isPost()) {

            // TODO create new project object and save it in database
            $task = new Project($_POST['title'], $_POST['description']);
            $this->tasksRepository->createtasks($task);

            return $this->render('tasks', ['messages' => $this->message]);
        }else{
            return $this->render('add-task', ['messages' => $this->message]);
        }
    }

    public function edittask()
    {
        if ($this->isGet()) {

            // TODO create new project object and save it in database
            $task = new Project($_POST['title'], $_POST['description']);
            $this->tasksRepository->edittasks($task);

            return $this->render('tasks', ['messages' => $this->message]);
        }
        if ($this->isPost()) {

            // TODO create new project object and save it in database
            $task = new Project($_POST['title'], $_POST['description']);
            $this->tasksRepository->edittasks($task);

            return $this->render('tasks', ['messages' => $this->message]);
        }
        return $this->render('edit-task', ['messages' => $this->message]);
    }

}