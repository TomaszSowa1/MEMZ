<?php


class Roles
{
    private $RoleId;
    private $role_description;

    public function __construct($RoleId, $role_description)
    {
        $this->RoleId = $RoleId;
        $this->role_description = $role_description;
    }
    public function getRoleId()
    {
        return $this->RoleId;
    }

    public function setRoleId($RoleId)
    {
        $this->RoleId = $RoleId;
    }

    public function getRoleDescription()
    {
        return $this->role_description;
    }

    public function setRoleDescription($role_description)
    {
        $this->role_description = $role_description;
    }
}