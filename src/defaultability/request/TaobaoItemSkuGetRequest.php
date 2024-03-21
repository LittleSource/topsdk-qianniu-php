<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemSkuGetRequest {

    /**
        需返回的字段列表。可选值：Sku结构体中的所有字段；字段之间用“,”分隔。
     **/
    private $fields;

    /**
        Sku的id。可以通过taobao.item.seller.get得到
     **/
    private $skuId;

    /**
        商品的数字IID（num_iid和nick必传一个，推荐用num_iid），传商品的数字id返回的结果里包含cspu（SKu上的产品规格信息）。
     **/
    private $numIid;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getSkuId() : int{
        return $this->skuId;
    }

    public function setSkuId(int $skuId){
        $this->skuId = $skuId;
    }

    public function getNumIid() : int{
        return $this->numIid;
    }

    public function setNumIid(int $numIid){
        $this->numIid = $numIid;
    }


    public function getApiName() : string {
        return "taobao.item.sku.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->skuId)) {
            $requestParam["sku_id"] = TopUtil::convertBasic($this->skuId);
        }

        if (!TopUtil::checkEmpty($this->numIid)) {
            $requestParam["num_iid"] = TopUtil::convertBasic($this->numIid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

