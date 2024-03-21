<?php
namespace Topsdk\Topapi\Ability314\Domain;

class TaobaoJushitaJdpUsersGetJdpUser {

    /**
        用户id
     **/
    public $user_id;

    /**
        rds的id，平台appkey会返回rds_id而不是rds_name
     **/
    public $rds_id;

    /**
        0:暂停1：正常2：sessoin失效，停止3：已删除
     **/
    public $status;

    /**
        rds数据库的实例名
     **/
    public $rds_name;

    /**
        用户昵称
     **/
    public $user_nick;

    /**
        卖家类型，B表示商城卖家，C表示淘宝卖家
     **/
    public $seller_type;

    /**
        用户等级，用于区分大卖家，值越大则订单量越大
     **/
    public $level;

    /**
        和数据回流绑定的appkey，用户的数据推到此appkey对应的rds后，会回传X_DOWNLOADED消息
     **/
    public $hl_appkey;


    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getRdsId() : int{
        return $this->rds_id;
    }

    public function setRdsId(int $rdsId){
        $this->rds_id = $rdsId;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getRdsName() : string{
        return $this->rds_name;
    }

    public function setRdsName(string $rdsName){
        $this->rds_name = $rdsName;
    }

    public function getUserNick() : string{
        return $this->user_nick;
    }

    public function setUserNick(string $userNick){
        $this->user_nick = $userNick;
    }

    public function getSellerType() : string{
        return $this->seller_type;
    }

    public function setSellerType(string $sellerType){
        $this->seller_type = $sellerType;
    }

    public function getLevel() : int{
        return $this->level;
    }

    public function setLevel(int $level){
        $this->level = $level;
    }

    public function getHlAppkey() : string{
        return $this->hl_appkey;
    }

    public function setHlAppkey(string $hlAppkey){
        $this->hl_appkey = $hlAppkey;
    }


}

