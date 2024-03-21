<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemSkusGetSku {

    /**
        sku的id
     **/
    public $sku_id;

    /**
        sku所属商品id(注意：iid近期即将废弃，请用num_iid参数)
     **/
    public $iid;

    /**
        sku所属商品数字id
     **/
    public $num_iid;

    /**
        sku的销售属性组合字符串（颜色，大小，等等，可通过类目API获取某类目下的销售属性）,格式是p1:v1;p2:v2
     **/
    public $properties;

    /**
        sku所对应的销售属性的中文名字串，格式如：pid1:vid1:pid_name1:vid_name1;pid2:vid2:pid_name2:vid_name2……
     **/
    public $properties_name;

    /**
        属于这个sku的商品的数量，
     **/
    public $quantity;

    /**
        属于这个sku的商品的价格 取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。
     **/
    public $price;

    /**
        商家设置的外部id。天猫和集市的卖家，需要登录才能获取到自己的商家编码，不能获取到他人的商家编码。
     **/
    public $outer_id;

    /**
        sku创建日期 时间格式：yyyy-MM-dd HH:mm:ss
     **/
    public $created;

    /**
        sku最后修改日期 时间格式：yyyy-MM-dd HH:mm:ss
     **/
    public $modified;

    /**
        sku状态。 normal:正常 ；delete:删除
     **/
    public $status;

    /**
        表示SKu上的产品规格信息
     **/
    public $sku_spec_id;

    /**
        商品级别的条形码
     **/
    public $barcode;


    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getIid() : string{
        return $this->iid;
    }

    public function setIid(string $iid){
        $this->iid = $iid;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getProperties() : string{
        return $this->properties;
    }

    public function setProperties(string $properties){
        $this->properties = $properties;
    }

    public function getPropertiesName() : string{
        return $this->properties_name;
    }

    public function setPropertiesName(string $propertiesName){
        $this->properties_name = $propertiesName;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
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

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getSkuSpecId() : int{
        return $this->sku_spec_id;
    }

    public function setSkuSpecId(int $skuSpecId){
        $this->sku_spec_id = $skuSpecId;
    }

    public function getBarcode() : string{
        return $this->barcode;
    }

    public function setBarcode(string $barcode){
        $this->barcode = $barcode;
    }


}

