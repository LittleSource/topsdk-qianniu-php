<?php
namespace Topsdk\Topapi\Ability181\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemCatpropsModificationGetRequest {

    /**
        类目Id（与商品Id二选一即可）
     **/
    private $categoryId;

    /**
        商品Id（与类目Id二选一即可。若同时传入商品Id和类目Id，则优先使用商品Id。若填写商品Id，则起始时间设为该商品最近修改时间）
     **/
    private $itemId;

    /**
        起始请求时间（建议传入，默认为90天内）
     **/
    private $startTime;


    public function getCategoryId() : int{
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId){
        $this->categoryId = $categoryId;
    }

    public function getItemId() : string{
        return $this->itemId;
    }

    public function setItemId(string $itemId){
        $this->itemId = $itemId;
    }

    public function getStartTime() : string{
        return $this->startTime;
    }

    public function setStartTime(string $startTime){
        $this->startTime = $startTime;
    }


    public function getApiName() : string {
        return "taobao.item.catprops.modification.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->categoryId)) {
            $requestParam["category_id"] = TopUtil::convertBasic($this->categoryId);
        }

        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->startTime)) {
            $requestParam["start_time"] = TopUtil::convertBasic($this->startTime);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

