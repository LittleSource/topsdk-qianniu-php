<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoItemPriceUpdateItem {

    /**
        商品iid
     **/
    public $iid;

    /**
        商品数字id
     **/
    public $num_iid;

    /**
        商品修改时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    public $modified;


    public function getIid() : string{
        return $this->iid;
    }

    public function setIid(string $iid){
        $this->iid = $iid;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }


}

