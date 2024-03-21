<?php
namespace Topsdk\Topapi\Ability180\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaProductMerchantproductPublishRequest {

    /**
        叶子类目ID
     **/
    private $catId;

    /**
        schema协议值
     **/
    private $product;


    public function getCatId() : int{
        return $this->catId;
    }

    public function setCatId(int $catId){
        $this->catId = $catId;
    }

    public function getProduct() : string{
        return $this->product;
    }

    public function setProduct(string $product){
        $this->product = $product;
    }


    public function getApiName() : string {
        return "alibaba.product.merchantproduct.publish";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->catId)) {
            $requestParam["cat_id"] = TopUtil::convertBasic($this->catId);
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

