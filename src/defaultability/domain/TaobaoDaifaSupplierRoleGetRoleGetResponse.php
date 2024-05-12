<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaSupplierRoleGetRoleGetResponse {

    /**
        入驻后产生的唯一ID
     **/
    public $id;

    /**
        NO_ROLE-未入驻 DISTRITOR-分销商 SUPPLIER-供货商
     **/
    public $role;

    /**
        分销商、供应商在平台的名称
     **/
    public $user_name;


    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getRole() : string{
        return $this->role;
    }

    public function setRole(string $role){
        $this->role = $role;
    }

    public function getUserName() : string{
        return $this->user_name;
    }

    public function setUserName(string $userName){
        $this->user_name = $userName;
    }


}

