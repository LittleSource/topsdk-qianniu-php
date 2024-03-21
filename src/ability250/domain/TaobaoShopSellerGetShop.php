<?php
namespace Topsdk\Topapi\Ability250\Domain;

class TaobaoShopSellerGetShop {

    /**
        店铺编号
     **/
    public $sid;

    /**
        店铺标题
     **/
    public $title;

    /**
        店标地址。返回相对路径，可以用"http://logo.taobao.com/shop-logo"来拼接成绝对路径
     **/
    public $pic_path;


    public function getSid() : int{
        return $this->sid;
    }

    public function setSid(int $sid){
        $this->sid = $sid;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getPicPath() : string{
        return $this->pic_path;
    }

    public function setPicPath(string $picPath){
        $this->pic_path = $picPath;
    }


}

