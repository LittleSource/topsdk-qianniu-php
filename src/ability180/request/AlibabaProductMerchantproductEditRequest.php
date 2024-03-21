<?php
namespace Topsdk\Topapi\Ability180\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaProductMerchantproductEditRequest {

    /**
        产品ID
     **/
    private $id;

    /**
        schema协议内容
     **/
    private $product;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getProduct() : string{
        return $this->product;
    }

    public function setProduct(string $product){
        $this->product = $product;
    }


    public function getApiName() : string {
        return "alibaba.product.merchantproduct.edit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        if (!TopUtil::checkEmpty($this->product)) {
            $requestParam["product"] = TopUtil::convertBasic($this->product);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

