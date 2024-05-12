<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaSupplierOrderConsignContactModel {

    /**
        详细地址
     **/
    public $address;

    /**
        省
     **/
    public $province;

    /**
        市
     **/
    public $city;

    /**
        姓名
     **/
    public $name;

    /**
        电话
     **/
    public $mobile;

    /**
        区
     **/
    public $distinct;

    /**
        镇/街道
     **/
    public $downtown;

    /**
        座机
     **/
    public $telephone;


    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getProvince() : string{
        return $this->province;
    }

    public function setProvince(string $province){
        $this->province = $province;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getMobile() : string{
        return $this->mobile;
    }

    public function setMobile(string $mobile){
        $this->mobile = $mobile;
    }

    public function getDistinct() : string{
        return $this->distinct;
    }

    public function setDistinct(string $distinct){
        $this->distinct = $distinct;
    }

    public function getDowntown() : string{
        return $this->downtown;
    }

    public function setDowntown(string $downtown){
        $this->downtown = $downtown;
    }

    public function getTelephone() : string{
        return $this->telephone;
    }

    public function setTelephone(string $telephone){
        $this->telephone = $telephone;
    }


}

