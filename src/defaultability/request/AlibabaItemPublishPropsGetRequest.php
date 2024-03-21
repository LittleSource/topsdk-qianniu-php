<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaItemPublishPropsGetRequest {

    /**
        商品发布的市场。taobao:淘宝,tmall:天猫,litetao:淘宝特价版
     **/
    private $market;

    /**
        商品类目ID
     **/
    private $catId;

    /**
        商品条码
     **/
    private $barcode;

    /**
        类目属性渲染schema
     **/
    private $schema;

    /**
        属性ID
     **/
    private $propId;


    public function getMarket() : string{
        return $this->market;
    }

    public function setMarket(string $market){
        $this->market = $market;
    }

    public function getCatId() : int{
        return $this->catId;
    }

    public function setCatId(int $catId){
        $this->catId = $catId;
    }

    public function getBarcode() : string{
        return $this->barcode;
    }

    public function setBarcode(string $barcode){
        $this->barcode = $barcode;
    }

    public function getSchema() : string{
        return $this->schema;
    }

    public function setSchema(string $schema){
        $this->schema = $schema;
    }

    public function getPropId() : int{
        return $this->propId;
    }

    public function setPropId(int $propId){
        $this->propId = $propId;
    }


    public function getApiName() : string {
        return "alibaba.item.publish.props.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->market)) {
            $requestParam["market"] = TopUtil::convertBasic($this->market);
        }

        if (!TopUtil::checkEmpty($this->catId)) {
            $requestParam["cat_id"] = TopUtil::convertBasic($this->catId);
        }

        if (!TopUtil::checkEmpty($this->barcode)) {
            $requestParam["barcode"] = TopUtil::convertBasic($this->barcode);
        }

        if (!TopUtil::checkEmpty($this->schema)) {
            $requestParam["schema"] = TopUtil::convertBasic($this->schema);
        }

        if (!TopUtil::checkEmpty($this->propId)) {
            $requestParam["prop_id"] = TopUtil::convertBasic($this->propId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

