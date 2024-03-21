<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSubuserDutysGetDuty {

    /**
        职务ID
     **/
    public $duty_id;

    /**
        职务级别
     **/
    public $duty_level;

    /**
        职务名称
     **/
    public $duty_name;


    public function getDutyId() : int{
        return $this->duty_id;
    }

    public function setDutyId(int $dutyId){
        $this->duty_id = $dutyId;
    }

    public function getDutyLevel() : int{
        return $this->duty_level;
    }

    public function setDutyLevel(int $dutyLevel){
        $this->duty_level = $dutyLevel;
    }

    public function getDutyName() : string{
        return $this->duty_name;
    }

    public function setDutyName(string $dutyName){
        $this->duty_name = $dutyName;
    }


}

