<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSellercatsListUpdateSellerCat {

    /**
        卖家自定义类目编号
     **/
    public $cid;

    /**
        修改时间。格式：yyyy-MM-dd HH:mm:ss
     **/
    public $modified;


    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }


}

