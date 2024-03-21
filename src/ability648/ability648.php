<?php
namespace Topsdk\Topapi\Ability648;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability648\Request\TaobaoDeliveryTemplateGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoDeliveryTemplatesGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoDeliveryTemplateDeleteRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoDeliveryTemplateAddRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoDeliveryTemplateUpdateRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoItemPriceUpdateRequest;

class Ability648 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取用户指定运费模板信息
    **/
    public function taobaoDeliveryTemplateGet(TaobaoDeliveryTemplateGetRequest $request) {
        return $this->client->execute("taobao.delivery.template.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取用户下所有模板
    **/
    public function taobaoDeliveryTemplatesGet(TaobaoDeliveryTemplatesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.delivery.templates.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除运费模板
    **/
    public function taobaoDeliveryTemplateDelete(TaobaoDeliveryTemplateDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.delivery.template.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        新增运费模板
    **/
    public function taobaoDeliveryTemplateAdd(TaobaoDeliveryTemplateAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.delivery.template.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改运费模板
    **/
    public function taobaoDeliveryTemplateUpdate(TaobaoDeliveryTemplateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.delivery.template.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新商品价格
    **/
    public function taobaoItemPriceUpdate(TaobaoItemPriceUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.price.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
}