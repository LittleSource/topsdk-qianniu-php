<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoVasSubscSearchRequest {

    /**
        淘宝会员名
     **/
    private $nick;

    /**
        应用收费代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得该应用的收费代码
     **/
    private $articleCode;

    /**
        收费项目代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得收费项目代码
     **/
    private $itemCode;

    /**
        到期时间起始值（当start_deadline和end_deadline都不填写时，默认返回最近90天的数据）
     **/
    private $startDeadline;

    /**
        到期时间结束值
     **/
    private $endDeadline;

    /**
        订购记录状态，1=有效 2=过期 空=全部
     **/
    private $status;

    /**
        是否自动续费，true=自动续费 false=非自动续费 空=全部
     **/
    private $autosub;

    /**
        是否到期提醒，true=到期提醒 false=非到期提醒 空=全部
     **/
    private $expireNotice;

    /**
        一页包含的记录数
     **/
    private $pageSize;

    /**
        页码
     **/
    private $pageNo;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getArticleCode() : string{
        return $this->articleCode;
    }

    public function setArticleCode(string $articleCode){
        $this->articleCode = $articleCode;
    }

    public function getItemCode() : string{
        return $this->itemCode;
    }

    public function setItemCode(string $itemCode){
        $this->itemCode = $itemCode;
    }

    public function getStartDeadline() : string{
        return $this->startDeadline;
    }

    public function setStartDeadline(string $startDeadline){
        $this->startDeadline = $startDeadline;
    }

    public function getEndDeadline() : string{
        return $this->endDeadline;
    }

    public function setEndDeadline(string $endDeadline){
        $this->endDeadline = $endDeadline;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getAutosub() : bool{
        return $this->autosub;
    }

    public function setAutosub(bool $autosub){
        $this->autosub = $autosub;
    }

    public function getExpireNotice() : bool{
        return $this->expireNotice;
    }

    public function setExpireNotice(bool $expireNotice){
        $this->expireNotice = $expireNotice;
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


    public function getApiName() : string {
        return "taobao.vas.subsc.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->nick)) {
            $requestParam["nick"] = TopUtil::convertBasic($this->nick);
        }

        if (!TopUtil::checkEmpty($this->articleCode)) {
            $requestParam["article_code"] = TopUtil::convertBasic($this->articleCode);
        }

        if (!TopUtil::checkEmpty($this->itemCode)) {
            $requestParam["item_code"] = TopUtil::convertBasic($this->itemCode);
        }

        if (!TopUtil::checkEmpty($this->startDeadline)) {
            $requestParam["start_deadline"] = TopUtil::convertBasic($this->startDeadline);
        }

        if (!TopUtil::checkEmpty($this->endDeadline)) {
            $requestParam["end_deadline"] = TopUtil::convertBasic($this->endDeadline);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->autosub)) {
            $requestParam["autosub"] = TopUtil::convertBasic($this->autosub);
        }

        if (!TopUtil::checkEmpty($this->expireNotice)) {
            $requestParam["expire_notice"] = TopUtil::convertBasic($this->expireNotice);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

