<?php
namespace Topsdk\Topapi\Ability180\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaProductMerchantproductsSearchRequest {

    /**
        关键词，建议填条形码
     **/
    private $keyword;


    public function getKeyword() : string{
        return $this->keyword;
    }

    public function setKeyword(string $keyword){
        $this->keyword = $keyword;
    }


    public function getApiName() : string {
        return "alibaba.product.merchantproducts.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->keyword)) {
            $requestParam["keyword"] = TopUtil::convertBasic($this->keyword);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

