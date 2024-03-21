<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaDistributorRoleGetRoleGetResponse {

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

    /**
        分销商入驻时填写的发货地址信息
     **/
    public $distributor_address;


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

    public function getDistributorAddress() : TaobaoDaifaDistributorRoleGetDistributorAddressDO{
        return $this->distributor_address;
    }

    public function setDistributorAddress(TaobaoDaifaDistributorRoleGetDistributorAddressDO $distributorAddress){
        $this->distributor_address = $distributorAddress;
    }


}

