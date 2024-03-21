<?php
namespace Topsdk\Topapi\Ability147\Request;
use Topsdk\Topapi\TopUtil;

class TmallProductUpdateSchemaGetRequest {

    /**
        产品编号
     **/
    private $productId;


    public function getProductId() : int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
    }


    public function getApiName() : string {
        return "tmall.product.update.schema.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->productId)) {
            $requestParam["product_id"] = TopUtil::convertBasic($this->productId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

