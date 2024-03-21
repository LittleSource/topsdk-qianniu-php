<?php
namespace Topsdk\Topapi\Ability181\Domain;

class TaobaoItemCatpropsModificationGetPropsModificationResult {

    /**
        类目属性Id
     **/
    public $property_id;

    /**
        是否必填，0-否，1-是
     **/
    public $required;

    /**
        是否多选，0-否，1-是
     **/
    public $multi_select;

    /**
        变更类型: 删除(1), 修改(2), 新增(3)
     **/
    public $type;

    /**
        变更日期
     **/
    public $ds;

    /**
        属性名称
     **/
    public $property_name;


    public function getPropertyId() : int{
        return $this->property_id;
    }

    public function setPropertyId(int $propertyId){
        $this->property_id = $propertyId;
    }

    public function getRequired() : int{
        return $this->required;
    }

    public function setRequired(int $required){
        $this->required = $required;
    }

    public function getMultiSelect() : int{
        return $this->multi_select;
    }

    public function setMultiSelect(int $multiSelect){
        $this->multi_select = $multiSelect;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getDs() : string{
        return $this->ds;
    }

    public function setDs(string $ds){
        $this->ds = $ds;
    }

    public function getPropertyName() : string{
        return $this->property_name;
    }

    public function setPropertyName(string $propertyName){
        $this->property_name = $propertyName;
    }


}

