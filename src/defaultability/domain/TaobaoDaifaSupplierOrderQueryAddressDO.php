<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaSupplierOrderQueryAddressDO {

    /**
        省
     **/
    public $prov;

    /**
        市
     **/
    public $city;

    /**
        区
     **/
    public $area;

    /**
        街道
     **/
    public $town;

    /**
        oaid
     **/
    public $oaid;

    /**
        收件人姓名 脱敏
     **/
    public $receiver_name;

    /**
        收件人手机号 脱敏
     **/
    public $receiver_mobile;

    /**
        收件人电话号码 脱敏
     **/
    public $receiver_phone;

    /**
        收件人详细地址（不包含省市区县4级地址）脱敏
     **/
    public $receiver_address;


    public function getProv() : string{
        return $this->prov;
    }

    public function setProv(string $prov){
        $this->prov = $prov;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getTown() : string{
        return $this->town;
    }

    public function setTown(string $town){
        $this->town = $town;
    }

    public function getOaid() : string{
        return $this->oaid;
    }

    public function setOaid(string $oaid){
        $this->oaid = $oaid;
    }

    public function getReceiverName() : string{
        return $this->receiver_name;
    }

    public function setReceiverName(string $receiverName){
        $this->receiver_name = $receiverName;
    }

    public function getReceiverMobile() : string{
        return $this->receiver_mobile;
    }

    public function setReceiverMobile(string $receiverMobile){
        $this->receiver_mobile = $receiverMobile;
    }

    public function getReceiverPhone() : string{
        return $this->receiver_phone;
    }

    public function setReceiverPhone(string $receiverPhone){
        $this->receiver_phone = $receiverPhone;
    }

    public function getReceiverAddress() : string{
        return $this->receiver_address;
    }

    public function setReceiverAddress(string $receiverAddress){
        $this->receiver_address = $receiverAddress;
    }


}

