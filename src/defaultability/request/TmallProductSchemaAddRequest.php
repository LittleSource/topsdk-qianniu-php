<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TmallProductSchemaAddRequest {

    /**
        商品发布的目标类目，必须是叶子类目
     **/
    private $categoryId;

    /**
        品牌ID
     **/
    private $brandId;

    /**
        根据tmall.product.add.schema.get生成的产品发布规则入参数据
     **/
    private $xmlData;


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

    public function getXmlData() : string{
        return $this->xmlData;
    }

    public function setXmlData(string $xmlData){
        $this->xmlData = $xmlData;
    }


    public function getApiName() : string {
        return "tmall.product.schema.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->categoryId)) {
            $requestParam["category_id"] = TopUtil::convertBasic($this->categoryId);
        }

        if (!TopUtil::checkEmpty($this->brandId)) {
            $requestParam["brand_id"] = TopUtil::convertBasic($this->brandId);
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

