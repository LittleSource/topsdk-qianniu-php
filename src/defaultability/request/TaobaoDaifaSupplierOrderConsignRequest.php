<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoDaifaSupplierOrderConsignContactModel;

class TaobaoDaifaSupplierOrderConsignRequest {

    /**
        退货地址
     **/
    private $refundContactModel;

    /**
        供货商平台侧id
     **/
    private $supplierId;

    /**
        供货单据ID，必须属于同一个淘宝主订单下，如果一次回传多个发货单据，以英文逗号分隔
     **/
    private $scpOrderIds;

    /**
        发货地址
     **/
    private $sendContactModel;

    /**
        业务对象
     **/
    private $packageList;

    /**
        发货单对应的子订单为未发货状态时可用，已发货状态传递该值无用了。feature参数格式 范例: identCode=tid1:识别码1,识别码2|tid2:识别码3;machineCode=tid3:3C机器号A,3C机器号B identCode为识别码的KEY,machineCode为3C的KEY,多个key之间用”;”分隔 “tid1:识别码1,识别码2|tid2:识别码3”为identCode对应的value。 "|"不同商品间的分隔符。 例1商品和2商品，之间就用"|"分开。 TID就是商品代表的子订单号，对应taobao.trade.fullinfo.get 接口获得的oid字段。(通过OID可以唯一定位到当前商品上) ":"TID和具体传入参数间的分隔符。冒号前表示TID,之后代表该商品的参数属性。 "," 属性间分隔符。（对应商品数量，当存在一个商品的数量超过1个时，用逗号分开）。 具体:当订单中A商品的数量为2个，其中手机串号分别为"12345","67890"。 参数格式：identCode=TIDA:12345,67890。 TIDA对应了A宝贝，冒号后用逗号分隔的"12345","67890".说明本订单A宝贝的数量为2，值分别为"12345","67890"。 当存在"|"时，就说明订单中存在多个商品，商品间用"|"分隔了开来。|"之后的内容含义同上。retailStoreId=12345，发货门店ID或仓信息。retailStoreType=STORE: 发货门店类别，STORE表示门店，WAREHOUSE表示电商仓。对于全渠道订单回传的商家，retailStoreId和retailStoreType字段为必填字段。instantMobilePhoneNumber表示同城配送物流公司的物流订单收货人手机号，支持11位真实号和15位隐私号"12345678910-1234"。
     **/
    private $feature;


    public function getRefundContactModel() : TaobaoDaifaSupplierOrderConsignContactModel{
        return $this->refundContactModel;
    }

    public function setRefundContactModel(TaobaoDaifaSupplierOrderConsignContactModel $refundContactModel){
        $this->refundContactModel = $refundContactModel;
    }

    public function getSupplierId() : int{
        return $this->supplierId;
    }

    public function setSupplierId(int $supplierId){
        $this->supplierId = $supplierId;
    }

    public function getScpOrderIds() : array{
        return $this->scpOrderIds;
    }

    public function setScpOrderIds(array $scpOrderIds){
        $this->scpOrderIds = $scpOrderIds;
    }

    public function getSendContactModel() : TaobaoDaifaSupplierOrderConsignContactModel{
        return $this->sendContactModel;
    }

    public function setSendContactModel(TaobaoDaifaSupplierOrderConsignContactModel $sendContactModel){
        $this->sendContactModel = $sendContactModel;
    }

    public function getPackageList() : array{
        return $this->packageList;
    }

    public function setPackageList(array $packageList){
        $this->packageList = $packageList;
    }

    public function getFeature() : string{
        return $this->feature;
    }

    public function setFeature(string $feature){
        $this->feature = $feature;
    }


    public function getApiName() : string {
        return "taobao.daifa.supplier.order.consign";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->refundContactModel)) {
            $requestParam["refund_contact_model"] = TopUtil::convertStruct($this->refundContactModel);
        }

        if (!TopUtil::checkEmpty($this->supplierId)) {
            $requestParam["supplier_id"] = TopUtil::convertBasic($this->supplierId);
        }

        if (!TopUtil::checkEmpty($this->scpOrderIds)) {
            $requestParam["scp_order_ids"] = TopUtil::convertBasicList($this->scpOrderIds);
        }

        if (!TopUtil::checkEmpty($this->sendContactModel)) {
            $requestParam["send_contact_model"] = TopUtil::convertStruct($this->sendContactModel);
        }

        if (!TopUtil::checkEmpty($this->packageList)) {
            $requestParam["package_list"] = TopUtil::convertStructList($this->packageList);
        }

        if (!TopUtil::checkEmpty($this->feature)) {
            $requestParam["feature"] = TopUtil::convertBasic($this->feature);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

