<?php
namespace Topsdk\Topapi\Ability180\Domain;

class TmallItemSeriesItemseriesInsertorupdateItemSeriesRequest {

    /**
        市场
     **/
    public $market;

    /**
        类目id
     **/
    public $cat_id;

    /**
        系列名称
     **/
    public $series_name;

    /**
        系列描述
     **/
    public $series_desc;

    /**
        系列id
     **/
    public $series_id;

    /**
        系列状态
     **/
    public $status;

    /**
        品牌值,当品牌作为聚合属性时生效
     **/
    public $brand_name;


    public function getMarket() : string{
        return $this->market;
    }

    public function setMarket(string $market){
        $this->market = $market;
    }

    public function getCatId() : int{
        return $this->cat_id;
    }

    public function setCatId(int $catId){
        $this->cat_id = $catId;
    }

    public function getSeriesName() : string{
        return $this->series_name;
    }

    public function setSeriesName(string $seriesName){
        $this->series_name = $seriesName;
    }

    public function getSeriesDesc() : string{
        return $this->series_desc;
    }

    public function setSeriesDesc(string $seriesDesc){
        $this->series_desc = $seriesDesc;
    }

    public function getSeriesId() : int{
        return $this->series_id;
    }

    public function setSeriesId(int $seriesId){
        $this->series_id = $seriesId;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getBrandName() : string{
        return $this->brand_name;
    }

    public function setBrandName(string $brandName){
        $this->brand_name = $brandName;
    }


}

