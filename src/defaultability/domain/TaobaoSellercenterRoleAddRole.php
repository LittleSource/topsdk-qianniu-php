<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSellercenterRoleAddRole {

    /**
        角色id
     **/
    public $role_id;

    /**
        角色描述
     **/
    public $description;

    /**
        修改时间
     **/
    public $modified_time;

    /**
        所拥有权限
     **/
    public $permissions;

    /**
        创建时间
     **/
    public $create_time;

    /**
        卖家Id
     **/
    public $seller_id;

    /**
        角色名
     **/
    public $role_name;


    public function getRoleId() : int{
        return $this->role_id;
    }

    public function setRoleId(int $roleId){
        $this->role_id = $roleId;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getModifiedTime() : string{
        return $this->modified_time;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modified_time = $modifiedTime;
    }

    public function getPermissions() : array{
        return $this->permissions;
    }

    public function setPermissions(array $permissions){
        $this->permissions = $permissions;
    }

    public function getCreateTime() : string{
        return $this->create_time;
    }

    public function setCreateTime(string $createTime){
        $this->create_time = $createTime;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getRoleName() : string{
        return $this->role_name;
    }

    public function setRoleName(string $roleName){
        $this->role_name = $roleName;
    }


}

