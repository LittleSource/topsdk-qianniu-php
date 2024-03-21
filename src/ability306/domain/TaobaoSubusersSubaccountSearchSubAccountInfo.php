<?php
namespace Topsdk\Topapi\Ability306\Domain;

class TaobaoSubusersSubaccountSearchSubAccountInfo {

    /**
        子账号id
     **/
    public $sub_id;

    /**
        子账号状态， 1正常   2冻结  3处罚
     **/
    public $status;

    /**
        主账号id
     **/
    public $seller_id;

    /**
        子账号登录名
     **/
    public $sub_nick;


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

    public function getSellerId() : string{
        return $this->seller_id;
    }

    public function setSellerId(string $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getSubNick() : string{
        return $this->sub_nick;
    }

    public function setSubNick(string $subNick){
        $this->sub_nick = $subNick;
    }


}

