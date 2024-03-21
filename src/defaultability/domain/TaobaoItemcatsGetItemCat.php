<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemcatsGetItemCat {

    /**
        商品所属类目ID
     **/
    public $cid;

    /**
        Feature对象列表
目前已有的属性：
若Attr_key为 udsaleprop，attr_value为1 则允许卖家在改类目新增自定义销售属性,不然为不允许
     **/
    public $features;

    /**
        该类目是否为父类目(即：该类目是否还有子类目)
     **/
    public $is_parent;

    /**
        类目名称
     **/
    public $name;

    /**
        父类目ID=0时，代表的是一级的类目
     **/
    public $parent_cid;

    /**
        排列序号，表示同级类目的展现次序，如数值相等则按名称次序排列。取值范围:大于零的整数
     **/
    public $sort_order;

    /**
        状态。可选值:normal(正常),deleted(删除)
     **/
    public $status;

    /**
        是否度量衡类目
     **/
    public $taosir_cat;


    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getFeatures() : array{
        return $this->features;
    }

    public function setFeatures(array $features){
        $this->features = $features;
    }

    public function getIsParent() : bool{
        return $this->is_parent;
    }

    public function setIsParent(bool $isParent){
        $this->is_parent = $isParent;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getParentCid() : int{
        return $this->parent_cid;
    }

    public function setParentCid(int $parentCid){
        $this->parent_cid = $parentCid;
    }

    public function getSortOrder() : int{
        return $this->sort_order;
    }

    public function setSortOrder(int $sortOrder){
        $this->sort_order = $sortOrder;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getTaosirCat() : bool{
        return $this->taosir_cat;
    }

    public function setTaosirCat(bool $taosirCat){
        $this->taosir_cat = $taosirCat;
    }


}

