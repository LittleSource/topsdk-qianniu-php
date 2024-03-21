<?php
namespace Topsdk\Topapi\Ability313\Domain;

class TaobaoJushitaJmsUserGetTmcUser {

    /**
        用户首次开通时间
     **/
    public $created;

    /**
        用户授权是否有效，true表示授权有效，false表示授权过期
     **/
    public $is_valid;

    /**
        用户最后开通时间
     **/
    public $modified;

    /**
        用户ID
     **/
    public $user_id;

    /**
        用户昵称
     **/
    public $user_nick;


    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getIsValid() : bool{
        return $this->is_valid;
    }

    public function setIsValid(bool $isValid){
        $this->is_valid = $isValid;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getUserNick() : string{
        return $this->user_nick;
    }

    public function setUserNick(string $userNick){
        $this->user_nick = $userNick;
    }


}

