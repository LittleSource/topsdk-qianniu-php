<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TmallProductAddSchemaGetRequest {

    /**
        商品发布的目标类目，必须是叶子类目
     **/
    private $categoryId;

    /**
        品牌ID
     **/
    private $brandId;


    public function getCategoryId() : int{
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId){
        $this->categoryId = $categoryId;
    }

    public function getBrandId() : int{
        return $this->brandId;
    }

    public function setBrandId(int $brandId){
        $this->brandId = $brandId;
    }


    public function getApiName() : string {
        return "tmall.product.add.schema.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->categoryId)) {
            $requestParam["category_id"] = TopUtil::convertBasic($this->categoryId);
        }

        if (!TopUtil::checkEmpty($this->brandId)) {
            $requestParam["brand_id"] = TopUtil::convertBasic($this->brandId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

