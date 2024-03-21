<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoAppstoreSubscribeGetUserSubscribe {

    /**
        订购状况。应用订购者：subscribeUser;尚未订购：unsubscribeUser；非法用户：invalidateUser
     **/
    public $status;

    /**
        订购开始时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $start_date;

    /**
        订购结束时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $end_date;

    /**
        0-无版本信息；1-初级版；2-中级版；3-高级版
     **/
    public $version_no;


    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getStartDate() : string{
        return $this->start_date;
    }

    public function setStartDate(string $startDate){
        $this->start_date = $startDate;
    }

    public function getEndDate() : string{
        return $this->end_date;
    }

    public function setEndDate(string $endDate){
        $this->end_date = $endDate;
    }

    public function getVersionNo() : int{
        return $this->version_no;
    }

    public function setVersionNo(int $versionNo){
        $this->version_no = $versionNo;
    }


}

