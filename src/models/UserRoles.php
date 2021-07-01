<?php


class UserRoles
{
    private $UserId;
    private $RoleId;

    public function getUserId()
    {
        return $this->UserId;
    }
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
    }

    public function getRoleId()
    {
        return $this->RoleId;
    }

    public function setRoleId($RoleId)
    {
        $this->RoleId = $RoleId;
    }

    public function __construct($UserId, $RoleId)
    {
        $this->UserId = $UserId;
        $this->RoleId = $RoleId;
    }

}