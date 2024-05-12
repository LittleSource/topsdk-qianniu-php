<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoDaifaSupplierOrderQueryRequest {

    /**
        结束时间 格式:yyyy-MM-dd HH:mm:ss,暂时只支持查询 30 天以内的订单
     **/
    private $endCreated;

    /**
        供货商ID
     **/
    private $supplierId;

    /**
        页码
     **/
    private $pageIndex;

    /**
        每页数量
     **/
    private $pageSize;

    /**
        开始时间 格式:yyyy-MM-dd HH:mm:ss,暂时只支持查询 30天以内的订单，以分单时间(distribute_time)为准
     **/
    private $startCreated;

    /**
        当传入scpOrderId则其它筛选条件失败，返回参数中会额外增加地址信息
     **/
    private $scpOrderId;

    /**
        淘宝主订单id，传入对应的淘宝主订单id后，将返回该淘宝订单下分配给供货商的单据信息
     **/
    private $bizOrderId;


    public function getEndCreated() : string{
        return $this->endCreated;
    }

    public function setEndCreated(string $endCreated){
        $this->endCreated = $endCreated;
    }

    public function getSupplierId() : int{
        return $this->supplierId;
    }

    public function setSupplierId(int $supplierId){
        $this->supplierId = $supplierId;
    }

    public function getPageIndex() : int{
        return $this->pageIndex;
    }

    public function setPageIndex(int $pageIndex){
        $this->pageIndex = $pageIndex;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getStartCreated() : string{
        return $this->startCreated;
    }

    public function setStartCreated(string $startCreated){
        $this->startCreated = $startCreated;
    }

    public function getScpOrderId() : int{
        return $this->scpOrderId;
    }

    public function setScpOrderId(int $scpOrderId){
        $this->scpOrderId = $scpOrderId;
    }

    public function getBizOrderId() : int{
        return $this->bizOrderId;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->bizOrderId = $bizOrderId;
    }


    public function getApiName() : string {
        return "taobao.daifa.supplier.order.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->endCreated)) {
            $requestParam["end_created"] = TopUtil::convertBasic($this->endCreated);
        }

        if (!TopUtil::checkEmpty($this->supplierId)) {
            $requestParam["supplier_id"] = TopUtil::convertBasic($this->supplierId);
        }

        if (!TopUtil::checkEmpty($this->pageIndex)) {
            $requestParam["page_index"] = TopUtil::convertBasic($this->pageIndex);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->startCreated)) {
            $requestParam["start_created"] = TopUtil::convertBasic($this->startCreated);
        }

        if (!TopUtil::checkEmpty($this->scpOrderId)) {
            $requestParam["scp_order_id"] = TopUtil::convertBasic($this->scpOrderId);
        }

        if (!TopUtil::checkEmpty($this->bizOrderId)) {
            $requestParam["biz_order_id"] = TopUtil::convertBasic($this->bizOrderId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

