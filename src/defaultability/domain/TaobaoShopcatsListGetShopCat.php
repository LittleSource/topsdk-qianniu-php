<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoShopcatsListGetShopCat {

    /**
        类目编号
     **/
    public $cid;

    /**
        父类目编号，注：此类目指前台类目，值等于0：表示此类目为一级类目，值不等于0：表示此类目有父类目
     **/
    public $parent_cid;

    /**
        类目名称
     **/
    public $name;

    /**
        该类目是否为父类目。即：该类目是否还有子类目
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

    public function getIsParent() : bool{
        return $this->is_parent;
    }

    public function setIsParent(bool $isParent){
        $this->is_parent = $isParent;
    }


}

