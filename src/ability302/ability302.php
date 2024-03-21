<?php
namespace Topsdk\Topapi\Ability302;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability302\Request\TaobaoFuwuSkuGetRequest;
use Topsdk\Topapi\Ability302\Request\TaobaoFuwuSpConfirmApplyRequest;
use Topsdk\Topapi\Ability302\Request\TaobaoFuwuSpBillreordAddRequest;
use Topsdk\Topapi\Ability302\Request\TaobaoFuwuPurchaseOrderPayRequest;

class Ability302 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取内购服务及SKU详情
    **/
    public function taobaoFuwuSkuGet(TaobaoFuwuSkuGetRequest $request) {
        return $this->client->execute("taobao.fuwu.sku.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        内购服务确认单申请接口
    **/
    public function taobaoFuwuSpConfirmApply(TaobaoFuwuSpConfirmApplyRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.fuwu.sp.confirm.apply", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        内购服务确认单明细上传接口
    **/
    public function taobaoFuwuSpBillreordAdd(TaobaoFuwuSpBillreordAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.fuwu.sp.billreord.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        内购服务订单付款页获取接口
    **/
    public function taobaoFuwuPurchaseOrderPay(TaobaoFuwuPurchaseOrderPayRequest $request) {
        return $this->client->execute("taobao.fuwu.purchase.order.pay", $request->toMap(), $request->toFileParamMap());
    }
}