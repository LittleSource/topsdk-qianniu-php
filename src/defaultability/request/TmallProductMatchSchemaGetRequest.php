<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TmallProductMatchSchemaGetRequest {

    /**
        商品发布的目标类目，必须是叶子类目
     **/
    private $categoryId;


    public function getCategoryId() : int{
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId){
        $this->categoryId = $categoryId;
    }


    public function getApiName() : string {
        return "tmall.product.match.schema.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->categoryId)) {
            $requestParam["category_id"] = TopUtil::convertBasic($this->categoryId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

