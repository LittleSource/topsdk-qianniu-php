<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TmallProductSchemaMatchRequest {

    /**
        商品发布的目标类目，必须是叶子类目
     **/
    private $categoryId;

    /**
        根据tmall.product.match.schema.get获取到的模板，ISV将需要的字段填充好相应的值结果XML。
     **/
    private $propvalues;


    public function getCategoryId() : int{
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId){
        $this->categoryId = $categoryId;
    }

    public function getPropvalues() : string{
        return $this->propvalues;
    }

    public function setPropvalues(string $propvalues){
        $this->propvalues = $propvalues;
    }


    public function getApiName() : string {
        return "tmall.product.schema.match";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->categoryId)) {
            $requestParam["category_id"] = TopUtil::convertBasic($this->categoryId);
        }

        if (!TopUtil::checkEmpty($this->propvalues)) {
            $requestParam["propvalues"] = TopUtil::convertBasic($this->propvalues);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

