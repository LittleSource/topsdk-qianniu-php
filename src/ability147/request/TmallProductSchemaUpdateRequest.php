<?php
namespace Topsdk\Topapi\Ability147\Request;
use Topsdk\Topapi\TopUtil;

class TmallProductSchemaUpdateRequest {

    /**
        产品编号
     **/
    private $productId;

    /**
        根据tmall.product.update.schema.get生成的产品更新规则入参数据
     **/
    private $xmlData;


    public function getProductId() : int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
    }

    public function getXmlData() : string{
        return $this->xmlData;
    }

    public function setXmlData(string $xmlData){
        $this->xmlData = $xmlData;
    }


    public function getApiName() : string {
        return "tmall.product.schema.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->productId)) {
            $requestParam["product_id"] = TopUtil::convertBasic($this->productId);
        }

        if (!TopUtil::checkEmpty($this->xmlData)) {
            $requestParam["xml_data"] = TopUtil::convertBasic($this->xmlData);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

