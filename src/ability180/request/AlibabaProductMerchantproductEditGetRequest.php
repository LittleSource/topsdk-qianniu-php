<?php
namespace Topsdk\Topapi\Ability180\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaProductMerchantproductEditGetRequest {

    /**
        产品ID
     **/
    private $id;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }


    public function getApiName() : string {
        return "alibaba.product.merchantproduct.edit.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

