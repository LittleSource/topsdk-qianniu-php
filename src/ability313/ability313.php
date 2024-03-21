<?php
namespace Topsdk\Topapi\Ability313;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability313\Request\TaobaoJushitaJmsTopicsGetRequest;
use Topsdk\Topapi\Ability313\Request\TaobaoJushitaJmsUserGetRequest;

class Ability313 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        根据用户nick获取开通的消息列表
    **/
    public function taobaoJushitaJmsTopicsGet(TaobaoJushitaJmsTopicsGetRequest $request) {
        return $this->client->execute("taobao.jushita.jms.topics.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        查询某个用户是否同步消息
    **/
    public function taobaoJushitaJmsUserGet(TaobaoJushitaJmsUserGetRequest $request) {
        return $this->client->execute("taobao.jushita.jms.user.get", $request->toMap(), $request->toFileParamMap());
    }
}