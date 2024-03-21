<?php
namespace Topsdk\Topapi\Ability32;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability32\Request\TaobaoMiniappCloudFunctionInvokeRequest;

class Ability32 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        外部触发云函数
    **/
    public function taobaoMiniappCloudFunctionInvoke(TaobaoMiniappCloudFunctionInvokeRequest $request) {
        return $this->client->execute("taobao.miniapp.cloud.function.invoke", $request->toMap(), $request->toFileParamMap());
    }
}