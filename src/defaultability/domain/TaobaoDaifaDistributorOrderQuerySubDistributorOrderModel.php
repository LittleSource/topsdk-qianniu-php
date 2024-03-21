<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaDistributorOrderQuerySubDistributorOrderModel {

    /**
        请使用daifa_scp_order_models中信息，代发订单ID
     **/
    public $scp_order_id;

    /**
        淘宝主订单ID，主子一体订单 bizOrderId = parentId
     **/
    public $parent_id;

    /**
        是否是主订单
     **/
    public $main;

    /**
        是否是子订单
     **/
    public $detail;

    /**
        订单ID
     **/
    public $biz_order_id;

    /**
        订单状态 - 继承交易的订单状态，WAIT_SELLER_SEND_GOODS("WAIT_SELLER_SEND_GOODS", "等待卖家发货"),     SELLER_CONSIGNED_PART("SELLER_CONSIGNED_PART", "卖家部分发货"),     WAIT_BUYER_CONFIRM_GOODS("WAIT_BUYER_CONFIRM_GOODS", "卖家已发货，等待买家确认收货"),     TRADE_FINISHED("TRADE_FINISHED", "交易完成"),     TRADE_CLOSED("TRADE_CLOSED", "交易关闭"),
     **/
    public $order_status;

    /**
        请使用daifa_scp_order_models中信息，一笔订单可能存在多次分配，所以此状态忽略，代发分配状态,INIT-未分配，DISTRIBUTE-已分配，CONSIGN-已回传，CANCEL-取消分配
     **/
    public $distribute_status;

    /**
        商品ID
     **/
    public $auction_id;

    /**
        商品图片url
     **/
    public $auction_pict_url;

    /**
        商品名称
     **/
    public $auction_name;

    /**
        数量
     **/
    public $quality;

    /**
        发货时间
     **/
    public $consign_time;

    /**
        支付时间
     **/
    public $pay_time;

    /**
        请使用daifa_scp_order_models中信息，分配时间
     **/
    public $distribute_time;

    /**
        卖家添加的备注
     **/
    public $seller_memo;

    /**
        平台侧skuId
     **/
    public $sku_id;

    /**
        代发单据对象
     **/
    public $daifa_scp_order_models;

    /**
        订单在平台sku描述信息
     **/
    public $sku_spec;

    /**
        外部网店自己定义的Sku编号。
     **/
    public $outer_sku_id;

    /**
        商家外部编码(可与商家外部系统对接)。外部商家自己定义的商品Item的id，可以通过taobao.items.custom.get获取商品的Item的信息
     **/
    public $outer_id;

    /**
        子订单创建时间
     **/
    public $gmt_create;

    /**
        子订单最后更新时间
     **/
    public $gmt_modified;


    public function getScpOrderId() : string{
        return $this->scp_order_id;
    }

    public function setScpOrderId(string $scpOrderId){
        $this->scp_order_id = $scpOrderId;
    }

    public function getParentId() : string{
        return $this->parent_id;
    }

    public function setParentId(string $parentId){
        $this->parent_id = $parentId;
    }

    public function getMain() : bool{
        return $this->main;
    }

    public function setMain(bool $main){
        $this->main = $main;
    }

    public function getDetail() : bool{
        return $this->detail;
    }

    public function setDetail(bool $detail){
        $this->detail = $detail;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getOrderStatus() : string{
        return $this->order_status;
    }

    public function setOrderStatus(string $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getDistributeStatus() : string{
        return $this->distribute_status;
    }

    public function setDistributeStatus(string $distributeStatus){
        $this->distribute_status = $distributeStatus;
    }

    public function getAuctionId() : string{
        return $this->auction_id;
    }

    public function setAuctionId(string $auctionId){
        $this->auction_id = $auctionId;
    }

    public function getAuctionPictUrl() : string{
        return $this->auction_pict_url;
    }

    public function setAuctionPictUrl(string $auctionPictUrl){
        $this->auction_pict_url = $auctionPictUrl;
    }

    public function getAuctionName() : string{
        return $this->auction_name;
    }

    public function setAuctionName(string $auctionName){
        $this->auction_name = $auctionName;
    }

    public function getQuality() : int{
        return $this->quality;
    }

    public function setQuality(int $quality){
        $this->quality = $quality;
    }

    public function getConsignTime() : string{
        return $this->consign_time;
    }

    public function setConsignTime(string $consignTime){
        $this->consign_time = $consignTime;
    }

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }

    public function getDistributeTime() : string{
        return $this->distribute_time;
    }

    public function setDistributeTime(string $distributeTime){
        $this->distribute_time = $distributeTime;
    }

    public function getSellerMemo() : string{
        return $this->seller_memo;
    }

    public function setSellerMemo(string $sellerMemo){
        $this->seller_memo = $sellerMemo;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getDaifaScpOrderModels() : array{
        return $this->daifa_scp_order_models;
    }

    public function setDaifaScpOrderModels(array $daifaScpOrderModels){
        $this->daifa_scp_order_models = $daifaScpOrderModels;
    }

    public function getSkuSpec() : string{
        return $this->sku_spec;
    }

    public function setSkuSpec(string $skuSpec){
        $this->sku_spec = $skuSpec;
    }

    public function getOuterSkuId() : string{
        return $this->outer_sku_id;
    }

    public function setOuterSkuId(string $outerSkuId){
        $this->outer_sku_id = $outerSkuId;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }


}

