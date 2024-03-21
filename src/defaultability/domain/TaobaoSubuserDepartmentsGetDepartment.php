<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSubuserDepartmentsGetDepartment {

    /**
        部门ID
     **/
    public $department_id;

    /**
        部门名称
     **/
    public $department_name;

    /**
        当前部门的父部门ID
     **/
    public $parent_id;

    /**
        部门下关联的子账号id列表
     **/
    public $sub_user_ids;


    public function getDepartmentId() : int{
        return $this->department_id;
    }

    public function setDepartmentId(int $departmentId){
        $this->department_id = $departmentId;
    }

    public function getDepartmentName() : string{
        return $this->department_name;
    }

    public function setDepartmentName(string $departmentName){
        $this->department_name = $departmentName;
    }

    public function getParentId() : int{
        return $this->parent_id;
    }

    public function setParentId(int $parentId){
        $this->parent_id = $parentId;
    }

    public function getSubUserIds() : array{
        return $this->sub_user_ids;
    }

    public function setSubUserIds(array $subUserIds){
        $this->sub_user_ids = $subUserIds;
    }


}

