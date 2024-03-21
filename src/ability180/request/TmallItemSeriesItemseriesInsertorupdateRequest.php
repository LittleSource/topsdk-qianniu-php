<?php
namespace Topsdk\Topapi\Ability180\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability180\Domain\TmallItemSeriesItemseriesInsertorupdateItemSeriesRequest;

class TmallItemSeriesItemseriesInsertorupdateRequest {

    /**
        商品系列创建或修改请求入参
     **/
    private $itemSeriesRequest;


    public function getItemSeriesRequest() : TmallItemSeriesItemseriesInsertorupdateItemSeriesRequest{
        return $this->itemSeriesRequest;
    }

    public function setItemSeriesRequest(TmallItemSeriesItemseriesInsertorupdateItemSeriesRequest $itemSeriesRequest){
        $this->itemSeriesRequest = $itemSeriesRequest;
    }


    public function getApiName() : string {
        return "tmall.item.series.itemseries.insertorupdate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemSeriesRequest)) {
            $requestParam["item_series_request"] = TopUtil::convertStruct($this->itemSeriesRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

