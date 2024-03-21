<?php
namespace Topsdk\Topapi\Ability180\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaProductMerchantproductPublishGetRequest {

    /**
        叶子类目ID
     **/
    private $catId;


    public function getCatId() : int{
        return $this->catId;
    }

    public function setCatId(int $catId){
        $this->catId = $catId;
    }


    public function getApiName() : string {
        return "alibaba.product.merchantproduct.publish.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->catId)) {
            $requestParam["cat_id"] = TopUtil::convertBasic($this->catId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

