<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaDistributorRoleGetDistributorAddressDO {

    /**
        省
     **/
    public $province;

    /**
        市
     **/
    public $city;

    /**
        区
     **/
    public $area;

    /**
        街道-非必填项
     **/
    public $town;

    /**
        详细地址
     **/
    public $address_detail;

    /**
        姓名
     **/
    public $full_name;

    /**
        手机号
     **/
    public $mobile;

    /**
        行政编码
     **/
    public $division_code;


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

    public function getAddressDetail() : string{
        return $this->address_detail;
    }

    public function setAddressDetail(string $addressDetail){
        $this->address_detail = $addressDetail;
    }

    public function getFullName() : string{
        return $this->full_name;
    }

    public function setFullName(string $fullName){
        $this->full_name = $fullName;
    }

    public function getMobile() : string{
        return $this->mobile;
    }

    public function setMobile(string $mobile){
        $this->mobile = $mobile;
    }

    public function getDivisionCode() : string{
        return $this->division_code;
    }

    public function setDivisionCode(string $divisionCode){
        $this->division_code = $divisionCode;
    }


}

