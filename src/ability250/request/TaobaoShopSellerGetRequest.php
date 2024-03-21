<?php
namespace Topsdk\Topapi\Ability250\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoShopSellerGetRequest {

    /**
        需返回的字段列表。可选值：Shop 结构中的所有字段；多个字段之间用逗号(,)分隔
     **/
    private $fields;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "taobao.shop.seller.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

