<?php


class tasks
{
    private $taskId;
    private $UserId;
    private $task_topic;
    private $task_description;
    private $create_date;
    private $planned_end_date;
    private $actual_end_date;
    private $status;
    private $status_reason;
    private $canceled;

    public function getTaskId():int
    {
        return $this->taskId;
    }

    public function setTaskId(int $taskId)
    {
        $this->taskId = $taskId;
    }
    public function getUserId()
    {
        return $this->UserId;
    }

    public function setUserId($UserId):int
    {
        $this->UserId = $UserId;
    }

    public function getTaskTopic()
    {
        return $this->task_topic;
    }

    public function setTaskTopic($task_topic):string
    {
        $this->task_topic = $task_topic;
    }

    public function getTaskDescription()
    {
        return $this->task_description;
    }

    public function setTaskDescription($task_description):string
    {
        $this->task_description = $task_description;
    }

    public function getCreateDate()
    {
        return $this->create_date;
    }

    public function setCreateDate($create_date)
    {
        $this->create_date = $create_date;
    }

    public function getPlannedEndDate()
    {
        return $this->planned_end_date;
    }


    public function setPlannedEndDate($planned_end_date)
    {
        $this->planned_end_date = $planned_end_date;
    }

    public function getActualEndDate()
    {
        return $this->actual_end_date;
    }

    public function setActualEndDate($actual_end_date)
    {
        $this->actual_end_date = $actual_end_date;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status):int
    {
        $this->status = $status;
    }

    public function getStatusReason()
    {
        return $this->status_reason;
    }

    public function setStatusReason($status_reason):string
    {
        $this->status_reason = $status_reason;
    }

    public function getCanceled():boolean
    {
        return $this->canceled;
    }

    public function setCanceled(boolean $canceled)
    {
        $this->canceled = $canceled;
    }


    public function __construct(int $taskId, int $UserId,string $task_topic,string $task_description,$create_date, $task_planned_end_date, $task_actual_end_date,int $status,string $status_reason,$canceled)
    {
        $this->taskId = $taskId;
        $this->UserId = $UserId;
        $this->task_topic = $task_topic;
        $this->task_description = $task_description;
        $this->create_date = $create_date;
        $this->planned_end_date = $task_planned_end_date;
        $this->actual_end_date = $task_actual_end_date;
        $this->status = $status;
        $this->status_reason = $status_reason;
        $this->canceled = $canceled;
    }

}