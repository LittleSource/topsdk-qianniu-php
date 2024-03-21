<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaUserinfoUpdateUpdateUserInfoRequest {

    /**
        用户的新身份，0是分销商，1是供货商，不传则不修改用户身份
     **/
    public $new_type;

    /**
        新用户名，不传则不修改用户名
     **/
    public $new_user_name;

    /**
        代发用户的
     **/
    public $user_id;


    public function getNewType() : int{
        return $this->new_type;
    }

    public function setNewType(int $newType){
        $this->new_type = $newType;
    }

    public function getNewUserName() : string{
        return $this->new_user_name;
    }

    public function setNewUserName(string $newUserName){
        $this->new_user_name = $newUserName;
    }

    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }


}

