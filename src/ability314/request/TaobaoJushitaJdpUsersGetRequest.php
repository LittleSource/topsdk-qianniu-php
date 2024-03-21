<?php
namespace Topsdk\Topapi\Ability314\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoJushitaJdpUsersGetRequest {

    /**
        普通isv不能传入此参数
     **/
    private $targetAppkey;

    /**
        此参数一般不用传，用于查询最后更改时间在某个时间段内的用户
     **/
    private $startModified;

    /**
        此参数一般不用传，用于查询最后更改时间在某个时间段内的用户
     **/
    private $endModified;

    /**
        每页记录数，默认200
     **/
    private $pageSize;

    /**
        当前页数
     **/
    private $pageNo;

    /**
        如果传了user_id表示单条查询
     **/
    private $userId;


    public function getTargetAppkey() : string{
        return $this->targetAppkey;
    }

    public function setTargetAppkey(string $targetAppkey){
        $this->targetAppkey = $targetAppkey;
    }

    public function getStartModified() : string{
        return $this->startModified;
    }

    public function setStartModified(string $startModified){
        $this->startModified = $startModified;
    }

    public function getEndModified() : string{
        return $this->endModified;
    }

    public function setEndModified(string $endModified){
        $this->endModified = $endModified;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getUserId() : int{
        return $this->userId;
    }

    public function setUserId(int $userId){
        $this->userId = $userId;
    }


    public function getApiName() : string {
        return "taobao.jushita.jdp.users.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->targetAppkey)) {
            $requestParam["target_appkey"] = TopUtil::convertBasic($this->targetAppkey);
        }

        if (!TopUtil::checkEmpty($this->startModified)) {
            $requestParam["start_modified"] = TopUtil::convertBasic($this->startModified);
        }

        if (!TopUtil::checkEmpty($this->endModified)) {
            $requestParam["end_modified"] = TopUtil::convertBasic($this->endModified);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->userId)) {
            $requestParam["user_id"] = TopUtil::convertBasic($this->userId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

