<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaDistributorOrderQueryAddressDO {

    /**
        省
     **/
    public $prov;

    /**
        市
     **/
    public $city;

    /**
        区
     **/
    public $area;

    /**
        街道
     **/
    public $town;


    public function getProv() : string{
        return $this->prov;
    }

    public function setProv(string $prov){
        $this->prov = $prov;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getTown() : string{
        return $this->town;
    }

    public function setTown(string $town){
        $this->town = $town;
    }


}

