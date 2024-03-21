<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSubusersInfoQuerySubUserDO {

    /**
        子账号Id
     **/
    public $sub_id;

    /**
        子账号当前状态 1正常 -1删除  2冻结
     **/
    public $status;

    /**
        子账号所属的主账号的唯一标识
     **/
    public $seller_id;

    /**
        子账号用户名
     **/
    public $nick;

    /**
        主账号昵称
     **/
    public $seller_nick;


    public function getSubId() : int{
        return $this->sub_id;
    }

    public function setSubId(int $subId){
        $this->sub_id = $subId;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }


}

