<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoDaifaDistributorBindRelaQueryRequest {

    /**
        页码
     **/
    private $pageIndex;

    /**
        每页数量
     **/
    private $pageSize;


    public function getPageIndex() : string{
        return $this->pageIndex;
    }

    public function setPageIndex(string $pageIndex){
        $this->pageIndex = $pageIndex;
    }

    public function getPageSize() : string{
        return $this->pageSize;
    }

    public function setPageSize(string $pageSize){
        $this->pageSize = $pageSize;
    }


    public function getApiName() : string {
        return "taobao.daifa.distributor.bind.rela.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pageIndex)) {
            $requestParam["page_index"] = TopUtil::convertBasic($this->pageIndex);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

