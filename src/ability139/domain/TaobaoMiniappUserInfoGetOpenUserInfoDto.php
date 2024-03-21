<?php
namespace Topsdk\Topapi\Ability139\Domain;

class TaobaoMiniappUserInfoGetOpenUserInfoDto {

    /**
        混淆字符串
     **/
    public $open_id;

    /**
        头像链接
     **/
    public $avatar;

    /**
        snsNick
     **/
    public $nick;


    public function getOpenId() : string{
        return $this->open_id;
    }

    public function setOpenId(string $openId){
        $this->open_id = $openId;
    }

    public function getAvatar() : string{
        return $this->avatar;
    }

    public function setAvatar(string $avatar){
        $this->avatar = $avatar;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }


}

