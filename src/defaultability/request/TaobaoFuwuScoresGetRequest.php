<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoFuwuScoresGetRequest {

    /**
        评价日期，查询某一天的评价
     **/
    private $date;

    /**
        每页获取条数。默认值40，最小值1，最大值100。
     **/
    private $pageSize;

    /**
        当前页
     **/
    private $currentPage;


    public function getDate() : string{
        return $this->date;
    }

    public function setDate(string $date){
        $this->date = $date;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getCurrentPage() : int{
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage){
        $this->currentPage = $currentPage;
    }


    public function getApiName() : string {
        return "taobao.fuwu.scores.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->date)) {
            $requestParam["date"] = TopUtil::convertBasic($this->date);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->currentPage)) {
            $requestParam["current_page"] = TopUtil::convertBasic($this->currentPage);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

