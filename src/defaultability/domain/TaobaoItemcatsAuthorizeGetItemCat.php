<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemcatsAuthorizeGetItemCat {

    /**
        商品所属类目ID
     **/
    public $cid;

    /**
        父类目ID=0时，代表的是一级的类目
     **/
    public $parent_cid;

    /**
        类目名称
     **/
    public $name;

    /**
        状态。可选值:normal(正常),deleted(删除)
     **/
    public $status;

    /**
        排列序号，表示同级类目的展现次序，如数值相等则按名称次序排列。取值范围:大于零的整数
     **/
    public $sort_order;

    /**
        该类目是否为父类目(即：该类目是否还有子类目)
     **/
    public $is_parent;


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

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getSortOrder() : int{
        return $this->sort_order;
    }

    public function setSortOrder(int $sortOrder){
        $this->sort_order = $sortOrder;
    }

    public function getIsParent() : bool{
        return $this->is_parent;
    }

    public function setIsParent(bool $isParent){
        $this->is_parent = $isParent;
    }


}

