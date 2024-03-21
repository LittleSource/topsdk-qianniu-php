<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TmallItemPriceUpdateUpdateItemPriceOption;

class TmallItemPriceUpdateRequest {

    /**
        商品ID
     **/
    private $itemId;

    /**
        被更新商品价格
     **/
    private $itemPrice;

    /**
        更新SKU价格时候的SKU价格对象；如果没有SKU或者不更新SKU价格，可以不填;查找SKU目前支持ID，属性串和商家编码三种模式，建议选用一种最合适的，切勿滥用，一次调用中如果混合使用，更新结果不可预期！
     **/
    private $skuPrices;

    /**
        商品价格更新时候的可选参数
     **/
    private $options;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getItemPrice() : string{
        return $this->itemPrice;
    }

    public function setItemPrice(string $itemPrice){
        $this->itemPrice = $itemPrice;
    }

    public function getSkuPrices() : array{
        return $this->skuPrices;
    }

    public function setSkuPrices(array $skuPrices){
        $this->skuPrices = $skuPrices;
    }

    public function getOptions() : TmallItemPriceUpdateUpdateItemPriceOption{
        return $this->options;
    }

    public function setOptions(TmallItemPriceUpdateUpdateItemPriceOption $options){
        $this->options = $options;
    }


    public function getApiName() : string {
        return "tmall.item.price.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->itemPrice)) {
            $requestParam["item_price"] = TopUtil::convertBasic($this->itemPrice);
        }

        if (!TopUtil::checkEmpty($this->skuPrices)) {
            $requestParam["sku_prices"] = TopUtil::convertStructList($this->skuPrices);
        }

        if (!TopUtil::checkEmpty($this->options)) {
            $requestParam["options"] = TopUtil::convertStruct($this->options);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

