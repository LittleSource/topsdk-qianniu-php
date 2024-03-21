<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSellercatsListAddSellerCat {

    /**
        卖家自定义类目编号
     **/
    public $cid;

    /**
        创建时间。格式：yyyy-MM-dd HH:mm:ss
     **/
    public $created;


    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }


}

