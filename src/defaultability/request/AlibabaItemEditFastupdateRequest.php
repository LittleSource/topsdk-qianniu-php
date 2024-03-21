<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaItemEditFastupdateRequest {

    /**
        商品ID
     **/
    private $itemId;

    /**
        商品类目ID。若不需要修改商品类目，则不用填写
     **/
    private $catId;

    /**
        产品ID，若不需要修改关联的产品信息，则不需要填写
     **/
    private $spuId;

    /**
        编辑后的schema信息(增量更新，只填写需要更新的字段)
     **/
    private $schema;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getCatId() : int{
        return $this->catId;
    }

    public function setCatId(int $catId){
        $this->catId = $catId;
    }

    public function getSpuId() : int{
        return $this->spuId;
    }

    public function setSpuId(int $spuId){
        $this->spuId = $spuId;
    }

    public function getSchema() : string{
        return $this->schema;
    }

    public function setSchema(string $schema){
        $this->schema = $schema;
    }


    public function getApiName() : string {
        return "alibaba.item.edit.fastupdate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->catId)) {
            $requestParam["cat_id"] = TopUtil::convertBasic($this->catId);
        }

        if (!TopUtil::checkEmpty($this->spuId)) {
            $requestParam["spu_id"] = TopUtil::convertBasic($this->spuId);
        }

        if (!TopUtil::checkEmpty($this->schema)) {
            $requestParam["schema"] = TopUtil::convertBasic($this->schema);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

