<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemSkusGetRequest {

    /**
        需返回的字段列表。可选值：Sku结构体中的所有字段；字段之间用“,”分隔。
     **/
    private $fields;

    /**
        sku所属商品数字id，必选。num_iid个数不能超过40个
     **/
    private $numIids;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getNumIids() : array{
        return $this->numIids;
    }

    public function setNumIids(array $numIids){
        $this->numIids = $numIids;
    }


    public function getApiName() : string {
        return "taobao.item.skus.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->numIids)) {
            $requestParam["num_iids"] = TopUtil::convertBasicList($this->numIids);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

