<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaDistributorBindRelaQueryQueryBindRelaResponse {

    /**
        绑定关系
     **/
    public $bind_relas;

    /**
        总数量
     **/
    public $total_count;


    public function getBindRelas() : array{
        return $this->bind_relas;
    }

    public function setBindRelas(array $bindRelas){
        $this->bind_relas = $bindRelas;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }


}

