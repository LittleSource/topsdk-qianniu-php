<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoDaifaDistributorOrderQueryRequest {

    /**
        商品id
     **/
    private $auctionId;

    /**
        结束时间
     **/
    private $endCreated;

    /**
        主订单ID，传递主订单ID后其它筛选条件即失败，返回参数中会额外返回省、市、区、街道信息
     **/
    private $bizOrderId;

    /**
        页码
     **/
    private $pageIndex;

    /**
        分销商平台id
     **/
    private $distributorId;

    /**
        每页数量
     **/
    private $pageSize;

    /**
        商品名称
     **/
    private $auctionName;

    /**
        开始时间，目前支持查询30天以内的订单，以订单创建时间为准
     **/
    private $startCreated;

    /**
        返回结果中是否包含已取消的代发单据，默认不反悔
     **/
    private $queryCancelScporder;


    public function getAuctionId() : int{
        return $this->auctionId;
    }

    public function setAuctionId(int $auctionId){
        $this->auctionId = $auctionId;
    }

    public function getEndCreated() : string{
        return $this->endCreated;
    }

    public function setEndCreated(string $endCreated){
        $this->endCreated = $endCreated;
    }

    public function getBizOrderId() : int{
        return $this->bizOrderId;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->bizOrderId = $bizOrderId;
    }

    public function getPageIndex() : int{
        return $this->pageIndex;
    }

    public function setPageIndex(int $pageIndex){
        $this->pageIndex = $pageIndex;
    }

    public function getDistributorId() : int{
        return $this->distributorId;
    }

    public function setDistributorId(int $distributorId){
        $this->distributorId = $distributorId;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getAuctionName() : string{
        return $this->auctionName;
    }

    public function setAuctionName(string $auctionName){
        $this->auctionName = $auctionName;
    }

    public function getStartCreated() : string{
        return $this->startCreated;
    }

    public function setStartCreated(string $startCreated){
        $this->startCreated = $startCreated;
    }

    public function getQueryCancelScporder() : bool{
        return $this->queryCancelScporder;
    }

    public function setQueryCancelScporder(bool $queryCancelScporder){
        $this->queryCancelScporder = $queryCancelScporder;
    }


    public function getApiName() : string {
        return "taobao.daifa.distributor.order.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->auctionId)) {
            $requestParam["auction_id"] = TopUtil::convertBasic($this->auctionId);
        }

        if (!TopUtil::checkEmpty($this->endCreated)) {
            $requestParam["end_created"] = TopUtil::convertBasic($this->endCreated);
        }

        if (!TopUtil::checkEmpty($this->bizOrderId)) {
            $requestParam["biz_order_id"] = TopUtil::convertBasic($this->bizOrderId);
        }

        if (!TopUtil::checkEmpty($this->pageIndex)) {
            $requestParam["page_index"] = TopUtil::convertBasic($this->pageIndex);
        }

        if (!TopUtil::checkEmpty($this->distributorId)) {
            $requestParam["distributor_id"] = TopUtil::convertBasic($this->distributorId);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->auctionName)) {
            $requestParam["auction_name"] = TopUtil::convertBasic($this->auctionName);
        }

        if (!TopUtil::checkEmpty($this->startCreated)) {
            $requestParam["start_created"] = TopUtil::convertBasic($this->startCreated);
        }

        if (!TopUtil::checkEmpty($this->queryCancelScporder)) {
            $requestParam["query_cancel_scporder"] = TopUtil::convertBasic($this->queryCancelScporder);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

