<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSellercatsListUpdateRequest {

    /**
        卖家自定义类目编号
     **/
    private $cid;

    /**
        卖家自定义类目名称。不超过20个字符
     **/
    private $name;

    /**
        链接图片URL地址
     **/
    private $pictUrl;

    /**
        该类目在页面上的排序位置,取值范围:大于零的整数
     **/
    private $sortOrder;


    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPictUrl() : string{
        return $this->pictUrl;
    }

    public function setPictUrl(string $pictUrl){
        $this->pictUrl = $pictUrl;
    }

    public function getSortOrder() : int{
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder){
        $this->sortOrder = $sortOrder;
    }


    public function getApiName() : string {
        return "taobao.sellercats.list.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cid)) {
            $requestParam["cid"] = TopUtil::convertBasic($this->cid);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->pictUrl)) {
            $requestParam["pict_url"] = TopUtil::convertBasic($this->pictUrl);
        }

        if (!TopUtil::checkEmpty($this->sortOrder)) {
            $requestParam["sort_order"] = TopUtil::convertBasic($this->sortOrder);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

