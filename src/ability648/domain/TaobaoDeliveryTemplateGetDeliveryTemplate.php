<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoDeliveryTemplateGetDeliveryTemplate {

    /**
        模块ID
     **/
    public $template_id;

    /**
        模板名称，长度不能超过25个字节
     **/
    public $name;

    /**
        可选值：0,1,2,3<br>,说明如下<br>
1)买家承担运费的模版<br>
0：买家承担服务费<br>
1: 卖家承担服务费<br>
2)卖家承担运费的模版<br>
2:卖家承担运费的模版（集市），卖家承担服务费<br>
3:卖家承担运费的模版（天猫），卖家承担服务费<br>
     **/
    public $assumer;

    /**
        可选值：0
说明：
0:表示按宝贝件数计算运费
<br/><br/>
1:表示按宝贝重量计算运费
<br/><br/>
3:表示按宝贝体积计算运费
     **/
    public $valuation;

    /**
        运费模板中运费详细信息对象，包含默认运费和指定地区运费
     **/
    public $fee_list;

    /**
        物流服务模板支持增值服务列表，多个用分号隔开。cod:货到付款 mops：刷卡付款
     **/
    public $supports;

    /**
        模板创建时间
     **/
    public $created;

    /**
        模板修改时间
     **/
    public $modified;

    /**
        运费模板上设置的发货地址
     **/
    public $address;

    /**
        该模板上设置的卖家发货地址区域ID，如：address为浙江省杭州市西湖去文三路XX号那么这个consign_area_id的值就是西湖区的ID
     **/
    public $consign_area_id;


    public function getTemplateId() : int{
        return $this->template_id;
    }

    public function setTemplateId(int $templateId){
        $this->template_id = $templateId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getAssumer() : int{
        return $this->assumer;
    }

    public function setAssumer(int $assumer){
        $this->assumer = $assumer;
    }

    public function getValuation() : int{
        return $this->valuation;
    }

    public function setValuation(int $valuation){
        $this->valuation = $valuation;
    }

    public function getFeeList() : array{
        return $this->fee_list;
    }

    public function setFeeList(array $feeList){
        $this->fee_list = $feeList;
    }

    public function getSupports() : string{
        return $this->supports;
    }

    public function setSupports(string $supports){
        $this->supports = $supports;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getConsignAreaId() : int{
        return $this->consign_area_id;
    }

    public function setConsignAreaId(int $consignAreaId){
        $this->consign_area_id = $consignAreaId;
    }


}

