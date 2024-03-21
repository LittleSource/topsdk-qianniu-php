<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSellercatsListAddRequest {

    /**
        卖家自定义类目名称。不超过20个字符
     **/
    private $name;

    /**
        链接图片URL地址。(绝对地址，格式：http://host/image_path)
     **/
    private $pictUrl;

    /**
        父类目编号，如果类目为店铺下的一级类目：值等于0，如果类目为子类目，调用获取taobao.sellercats.list.get父类目编号
     **/
    private $parentCid;

    /**
        该类目在页面上的排序位置,取值范围:大于零的整数
     **/
    private $sortOrder;


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

    public function getParentCid() : int{
        return $this->parentCid;
    }

    public function setParentCid(int $parentCid){
        $this->parentCid = $parentCid;
    }

    public function getSortOrder() : int{
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder){
        $this->sortOrder = $sortOrder;
    }


    public function getApiName() : string {
        return "taobao.sellercats.list.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->pictUrl)) {
            $requestParam["pict_url"] = TopUtil::convertBasic($this->pictUrl);
        }

        if (!TopUtil::checkEmpty($this->parentCid)) {
            $requestParam["parent_cid"] = TopUtil::convertBasic($this->parentCid);
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

