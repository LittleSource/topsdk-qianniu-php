<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemcatsAuthorizeGetSellerAuthorize {

    /**
        商品类目结构
     **/
    public $item_cats;

    /**
        商品类目结构
     **/
    public $xinpin_item_cats;

    /**
        品牌
     **/
    public $brands;


    public function getItemCats() : array{
        return $this->item_cats;
    }

    public function setItemCats(array $itemCats){
        $this->item_cats = $itemCats;
    }

    public function getXinpinItemCats() : array{
        return $this->xinpin_item_cats;
    }

    public function setXinpinItemCats(array $xinpinItemCats){
        $this->xinpin_item_cats = $xinpinItemCats;
    }

    public function getBrands() : array{
        return $this->brands;
    }

    public function setBrands(array $brands){
        $this->brands = $brands;
    }


}

