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

    public function getTaskId()
    {
        return $this->taskId;
    }

    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
    }
    public function getUserId()
    {
        return $this->UserId;
    }

    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
    }

    public function getTaskTopic()
    {
        return $this->task_topic;
    }

    public function setTaskTopic($task_topic)
    {
        $this->task_topic = $task_topic;
    }

    public function getTaskDescription()
    {
        return $this->task_description;
    }

    public function setTaskDescription($task_description)
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

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatusReason()
    {
        return $this->status_reason;
    }

    public function setStatusReason($status_reason)
    {
        $this->status_reason = $status_reason;
    }

    public function getCanceled()
    {
        return $this->canceled;
    }

    public function setCanceled($canceled)
    {
        $this->canceled = $canceled;
    }


    public function __construct($taskId, $UserId, $task_topic, $task_description, $create_date, $planned_end_date, $actual_end_date, $status, $status_reason, $canceled)
    {
        $this->taskId = $taskId;
        $this->UserId = $UserId;
        $this->task_topic = $task_topic;
        $this->task_description = $task_description;
        $this->create_date = $create_date;
        $this->planned_end_date = $planned_end_date;
        $this->actual_end_date = $actual_end_date;
        $this->status = $status;
        $this->status_reason = $status_reason;
        $this->canceled = $canceled;
    }

}