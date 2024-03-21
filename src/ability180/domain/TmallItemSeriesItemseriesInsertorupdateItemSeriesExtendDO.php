<?php
namespace Topsdk\Topapi\Ability180\Domain;

class TmallItemSeriesItemseriesInsertorupdateItemSeriesExtendDO {

    /**
        系列玩法
     **/
    public $mode;

    /**
        类目id
     **/
    public $cat_id;

    /**
        分组信息
     **/
    public $group_item_list;

    /**
        系列名称
     **/
    public $series_name;

    /**
        系列描述
     **/
    public $series_desc;


    public function getMode() : string{
        return $this->mode;
    }

    public function setMode(string $mode){
        $this->mode = $mode;
    }

    public function getCatId() : int{
        return $this->cat_id;
    }

    public function setCatId(int $catId){
        $this->cat_id = $catId;
    }

    public function getGroupItemList() : array{
        return $this->group_item_list;
    }

    public function setGroupItemList(array $groupItemList){
        $this->group_item_list = $groupItemList;
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


}

