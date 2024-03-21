<?php
namespace Topsdk\Topapi\Ability1285;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability1285\Request\TaobaoItemQualificationDisplayGetRequest;

class Ability1285 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        资质采集配置异步获取接口
    **/
    public function taobaoItemQualificationDisplayGet(TaobaoItemQualificationDisplayGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.qualification.display.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}