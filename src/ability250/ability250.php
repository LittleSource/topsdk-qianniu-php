<?php
namespace Topsdk\Topapi\Ability250;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability250\Request\TaobaoShopSellerGetRequest;

class Ability250 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        卖家店铺基础信息查询
    **/
    public function taobaoShopSellerGet(TaobaoShopSellerGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.shop.seller.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}