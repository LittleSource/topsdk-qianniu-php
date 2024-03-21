<?php
namespace Topsdk\Topapi\Ability180\Domain;

class TmallItemSeriesItemseriesInsertorupdateGroupItem {

    /**
        分组名称
     **/
    public $text;

    /**
        分组id
     **/
    public $value;


    public function getText() : string{
        return $this->text;
    }

    public function setText(string $text){
        $this->text = $text;
    }

    public function getValue() : int{
        return $this->value;
    }

    public function setValue(int $value){
        $this->value = $value;
    }


}

