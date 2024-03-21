<?php
namespace Topsdk\Topapi\Ability181;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability181\Request\TaobaoItemCatpropsModificationGetRequest;

class Ability181 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        查询商品类目属性变更
    **/
    public function taobaoItemCatpropsModificationGet(TaobaoItemCatpropsModificationGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.catprops.modification.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}