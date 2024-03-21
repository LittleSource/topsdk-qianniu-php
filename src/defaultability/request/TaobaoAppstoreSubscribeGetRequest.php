<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoAppstoreSubscribeGetRequest {

    /**
        用户昵称
     **/
    private $nick;

    /**
        插件实例ID
     **/
    private $leaseId;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getLeaseId() : int{
        return $this->leaseId;
    }

    public function setLeaseId(int $leaseId){
        $this->leaseId = $leaseId;
    }


    public function getApiName() : string {
        return "taobao.appstore.subscribe.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->nick)) {
            $requestParam["nick"] = TopUtil::convertBasic($this->nick);
        }

        if (!TopUtil::checkEmpty($this->leaseId)) {
            $requestParam["lease_id"] = TopUtil::convertBasic($this->leaseId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

