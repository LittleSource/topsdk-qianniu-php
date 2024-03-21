<?php
namespace Topsdk\Topapi\Ability306\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSubusersSubaccountSearchRequest {

    /**
        主账号登录名
     **/
    private $mainNick;

    /**
        根据子账号冒号后缀的搜索词，支持中文单字、英文单词 分词规则搜索。该搜索词必传。如果不需要模糊搜索仅需要分页获取子账号列表，请使用taobao.sellercenter.subusers.page接口
     **/
    private $filterKey;

    /**
        页大小，大于1小于200
     **/
    private $pageSize;

    /**
        页码，大于等于1
     **/
    private $pageNum;


    public function getMainNick() : string{
        return $this->mainNick;
    }

    public function setMainNick(string $mainNick){
        $this->mainNick = $mainNick;
    }

    public function getFilterKey() : string{
        return $this->filterKey;
    }

    public function setFilterKey(string $filterKey){
        $this->filterKey = $filterKey;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPageNum() : int{
        return $this->pageNum;
    }

    public function setPageNum(int $pageNum){
        $this->pageNum = $pageNum;
    }


    public function getApiName() : string {
        return "taobao.subusers.subaccount.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->mainNick)) {
            $requestParam["main_nick"] = TopUtil::convertBasic($this->mainNick);
        }

        if (!TopUtil::checkEmpty($this->filterKey)) {
            $requestParam["filter_key"] = TopUtil::convertBasic($this->filterKey);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNum)) {
            $requestParam["page_num"] = TopUtil::convertBasic($this->pageNum);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

