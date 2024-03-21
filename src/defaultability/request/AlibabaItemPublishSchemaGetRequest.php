<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaItemPublishSchemaGetRequest {

    /**
        商品主图链接，最多5张，传入完整URL
     **/
    private $images;

    /**
        商品类型。b:一口价  a:拍卖  默认值b一口价
     **/
    private $itemType;

    /**
        业务扩展参数，需与平台约定好
     **/
    private $bizType;

    /**
        商品发布的市场。taobao:淘宝,tmall:天猫,litetao:淘宝特价版
     **/
    private $market;

    /**
        商品类目ID
     **/
    private $catId;

    /**
        产品ID，天猫市场(market=tmall)时必填
     **/
    private $spuId;

    /**
        商品条码
     **/
    private $barcode;


    public function getImages() : array{
        return $this->images;
    }

    public function setImages(array $images){
        $this->images = $images;
    }

    public function getItemType() : string{
        return $this->itemType;
    }

    public function setItemType(string $itemType){
        $this->itemType = $itemType;
    }

    public function getBizType() : string{
        return $this->bizType;
    }

    public function setBizType(string $bizType){
        $this->bizType = $bizType;
    }

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

    public function getSpuId() : int{
        return $this->spuId;
    }

    public function setSpuId(int $spuId){
        $this->spuId = $spuId;
    }

    public function getBarcode() : string{
        return $this->barcode;
    }

    public function setBarcode(string $barcode){
        $this->barcode = $barcode;
    }


    public function getApiName() : string {
        return "alibaba.item.publish.schema.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->images)) {
            $requestParam["images"] = TopUtil::convertBasicList($this->images);
        }

        if (!TopUtil::checkEmpty($this->itemType)) {
            $requestParam["item_type"] = TopUtil::convertBasic($this->itemType);
        }

        if (!TopUtil::checkEmpty($this->bizType)) {
            $requestParam["biz_type"] = TopUtil::convertBasic($this->bizType);
        }

        if (!TopUtil::checkEmpty($this->market)) {
            $requestParam["market"] = TopUtil::convertBasic($this->market);
        }

        if (!TopUtil::checkEmpty($this->catId)) {
            $requestParam["cat_id"] = TopUtil::convertBasic($this->catId);
        }

        if (!TopUtil::checkEmpty($this->spuId)) {
            $requestParam["spu_id"] = TopUtil::convertBasic($this->spuId);
        }

        if (!TopUtil::checkEmpty($this->barcode)) {
            $requestParam["barcode"] = TopUtil::convertBasic($this->barcode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

