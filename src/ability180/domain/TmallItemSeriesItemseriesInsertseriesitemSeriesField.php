<?php
namespace Topsdk\Topapi\Ability180\Domain;

class TmallItemSeriesItemseriesInsertseriesitemSeriesField {

    /**
        文本
     **/
    public $text;

    /**
        值
     **/
    public $value;

    /**
        key
     **/
    public $key;

    /**
        type
     **/
    public $type;


    public function getText() : string{
        return $this->text;
    }

    public function setText(string $text){
        $this->text = $text;
    }

    public function getValue() : string{
        return $this->value;
    }

    public function setValue(string $value){
        $this->value = $value;
    }

    public function getKey() : string{
        return $this->key;
    }

    public function setKey(string $key){
        $this->key = $key;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }


}

