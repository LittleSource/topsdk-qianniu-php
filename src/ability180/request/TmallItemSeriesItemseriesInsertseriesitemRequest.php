<?php
namespace Topsdk\Topapi\Ability180\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability180\Domain\TmallItemSeriesItemseriesInsertseriesitemSeriesItemRequest;

class TmallItemSeriesItemseriesInsertseriesitemRequest {

    /**
        系列商品编辑入参
     **/
    private $seriesItemRequest;


    public function getSeriesItemRequest() : TmallItemSeriesItemseriesInsertseriesitemSeriesItemRequest{
        return $this->seriesItemRequest;
    }

    public function setSeriesItemRequest(TmallItemSeriesItemseriesInsertseriesitemSeriesItemRequest $seriesItemRequest){
        $this->seriesItemRequest = $seriesItemRequest;
    }


    public function getApiName() : string {
        return "tmall.item.series.itemseries.insertseriesitem";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->seriesItemRequest)) {
            $requestParam["series_item_request"] = TopUtil::convertStruct($this->seriesItemRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

