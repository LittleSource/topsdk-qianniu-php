<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoShopUpdateRequest {

    /**
        店铺标题。不超过30个字符；过滤敏感词，如淘咖啡、阿里巴巴等。title, bulletin和desc至少必须传一个
     **/
    private $title;

    /**
        店铺公告。不超过1024个字符
     **/
    private $bulletin;

    /**
        店铺描述。10～2000个字符以内
     **/
    private $desc;


    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getBulletin() : string{
        return $this->bulletin;
    }

    public function setBulletin(string $bulletin){
        $this->bulletin = $bulletin;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }


    public function getApiName() : string {
        return "taobao.shop.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->title)) {
            $requestParam["title"] = TopUtil::convertBasic($this->title);
        }

        if (!TopUtil::checkEmpty($this->bulletin)) {
            $requestParam["bulletin"] = TopUtil::convertBasic($this->bulletin);
        }

        if (!TopUtil::checkEmpty($this->desc)) {
            $requestParam["desc"] = TopUtil::convertBasic($this->desc);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

