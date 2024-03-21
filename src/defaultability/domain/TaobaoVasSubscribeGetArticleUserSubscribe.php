<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoVasSubscribeGetArticleUserSubscribe {

    /**
        收费项目代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得收费项目代码
     **/
    public $item_code;

    /**
        订购关系到期时间
     **/
    public $deadline;


    public function getItemCode() : string{
        return $this->item_code;
    }

    public function setItemCode(string $itemCode){
        $this->item_code = $itemCode;
    }

    public function getDeadline() : string{
        return $this->deadline;
    }

    public function setDeadline(string $deadline){
        $this->deadline = $deadline;
    }


}

