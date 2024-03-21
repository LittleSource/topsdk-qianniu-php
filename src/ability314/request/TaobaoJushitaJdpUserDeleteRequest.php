<?php
namespace Topsdk\Topapi\Ability314\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoJushitaJdpUserDeleteRequest {

    /**
        要删除用户的昵称
     **/
    private $nick;

    /**
        要删除用户的openuid
     **/
    private $openUid;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getOpenUid() : string{
        return $this->openUid;
    }

    public function setOpenUid(string $openUid){
        $this->openUid = $openUid;
    }


    public function getApiName() : string {
        return "taobao.jushita.jdp.user.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->nick)) {
            $requestParam["nick"] = TopUtil::convertBasic($this->nick);
        }

        if (!TopUtil::checkEmpty($this->openUid)) {
            $requestParam["open_uid"] = TopUtil::convertBasic($this->openUid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

