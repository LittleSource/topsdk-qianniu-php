<?php
namespace Topsdk\Topapi\Ability1285\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemQualificationDisplayGetRequest {

    /**
        参数列表，为key和value都是string的map的转化的json格式
     **/
    private $param;

    /**
        商品id
     **/
    private $itemId;

    /**
        类目id
     **/
    private $categoryId;


    public function getParam() : string{
        return $this->param;
    }

    public function setParam(string $param){
        $this->param = $param;
    }

    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getCategoryId() : int{
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId){
        $this->categoryId = $categoryId;
    }


    public function getApiName() : string {
        return "taobao.item.qualification.display.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertBasic($this->param);
        }

        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

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

