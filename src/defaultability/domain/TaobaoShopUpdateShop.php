<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoShopUpdateShop {

    /**
        店铺编号
     **/
    public $sid;

    /**
        最后修改时间。格式：yyyy-MM-dd HH:mm:ss
     **/
    public $modified;


    public function getSid() : int{
        return $this->sid;
    }

    public function setSid(int $sid){
        $this->sid = $sid;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }


}

