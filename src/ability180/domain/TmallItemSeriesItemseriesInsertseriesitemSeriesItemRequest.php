<?php
namespace Topsdk\Topapi\Ability180\Domain;

class TmallItemSeriesItemseriesInsertseriesitemSeriesItemRequest {

    /**
        市场
     **/
    public $market;

    /**
        商品id
     **/
    public $item_id;

    /**
        分组名称
     **/
    public $group_name;

    /**
        排序
     **/
    public $sort;

    /**
        系列id
     **/
    public $series_id;

    /**
        定制展示名称
     **/
    public $custom_version;


    public function getMarket() : string{
        return $this->market;
    }

    public function setMarket(string $market){
        $this->market = $market;
    }

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getGroupName() : string{
        return $this->group_name;
    }

    public function setGroupName(string $groupName){
        $this->group_name = $groupName;
    }

    public function getSort() : int{
        return $this->sort;
    }

    public function setSort(int $sort){
        $this->sort = $sort;
    }

    public function getSeriesId() : int{
        return $this->series_id;
    }

    public function setSeriesId(int $seriesId){
        $this->series_id = $seriesId;
    }

    public function getCustomVersion() : string{
        return $this->custom_version;
    }

    public function setCustomVersion(string $customVersion){
        $this->custom_version = $customVersion;
    }


}

