<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaDistributorBindRelaQueryBindRela {

    /**
        绑定者ID
     **/
    public $role_id;

    /**
        身份表示
     **/
    public $role;

    /**
        绑定时间
     **/
    public $bind_create_time;

    /**
        分销商或供货商在代发管理平台的别名
     **/
    public $user_name;


    public function getRoleId() : int{
        return $this->role_id;
    }

    public function setRoleId(int $roleId){
        $this->role_id = $roleId;
    }

    public function getRole() : string{
        return $this->role;
    }

    public function setRole(string $role){
        $this->role = $role;
    }

    public function getBindCreateTime() : string{
        return $this->bind_create_time;
    }

    public function setBindCreateTime(string $bindCreateTime){
        $this->bind_create_time = $bindCreateTime;
    }

    public function getUserName() : string{
        return $this->user_name;
    }

    public function setUserName(string $userName){
        $this->user_name = $userName;
    }


}

