<?php
namespace Topsdk\Topapi\Ability180\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemSeriesItemseriesRemoveitemfromseriesRequest {

    /**
        商品id
     **/
    private $itemId;

    /**
        商品系列id
     **/
    private $seriesId;

    /**
        市场
     **/
    private $market;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getSeriesId() : int{
        return $this->seriesId;
    }

    public function setSeriesId(int $seriesId){
        $this->seriesId = $seriesId;
    }

    public function getMarket() : string{
        return $this->market;
    }

    public function setMarket(string $market){
        $this->market = $market;
    }


    public function getApiName() : string {
        return "tmall.item.series.itemseries.removeitemfromseries";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->seriesId)) {
            $requestParam["series_id"] = TopUtil::convertBasic($this->seriesId);
        }

        if (!TopUtil::checkEmpty($this->market)) {
            $requestParam["market"] = TopUtil::convertBasic($this->market);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

