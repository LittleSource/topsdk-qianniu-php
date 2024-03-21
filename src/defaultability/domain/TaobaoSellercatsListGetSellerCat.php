<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSellercatsListGetSellerCat {

    /**
        卖家自定义类目编号
     **/
    public $cid;

    /**
        父类目编号，值等于0：表示此类目为店铺下的一级类目，值不等于0：表示此类目有父类目
     **/
    public $parent_cid;

    /**
        卖家自定义类目名称
     **/
    public $name;

    /**
        链接图片地址
     **/
    public $pic_url;

    /**
        该类目在页面上的排序位置
     **/
    public $sort_order;

    /**
        店铺类目类型：可选值：manual_type：手动分类，new_type：新品上价， tree_type：二三级类目树 ，property_type：属性叶子类目树， brand_type：品牌推广
     **/
    public $type;


    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getParentCid() : int{
        return $this->parent_cid;
    }

    public function setParentCid(int $parentCid){
        $this->parent_cid = $parentCid;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
    }

    public function getSortOrder() : int{
        return $this->sort_order;
    }

    public function setSortOrder(int $sortOrder){
        $this->sort_order = $sortOrder;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }


}

