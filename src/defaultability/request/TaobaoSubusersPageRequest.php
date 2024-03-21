<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSubusersPageRequest {

    /**
        主账号用户名
     **/
    private $userNick;

    /**
        可以不传，不传的话和老接口返回数据一样。如果传则根据子账号当前状态筛选 1正常   2冻结  3处罚，如果不传默认都返回
     **/
    private $accountStatus;

    /**
        页大小，大于1小于200
     **/
    private $pageSize;

    /**
        页码，大于等于1
     **/
    private $pageNum;


    public function getUserNick() : string{
        return $this->userNick;
    }

    public function setUserNick(string $userNick){
        $this->userNick = $userNick;
    }

    public function getAccountStatus() : int{
        return $this->accountStatus;
    }

    public function setAccountStatus(int $accountStatus){
        $this->accountStatus = $accountStatus;
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
        return "taobao.subusers.page";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->userNick)) {
            $requestParam["user_nick"] = TopUtil::convertBasic($this->userNick);
        }

        if (!TopUtil::checkEmpty($this->accountStatus)) {
            $requestParam["account_status"] = TopUtil::convertBasic($this->accountStatus);
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

