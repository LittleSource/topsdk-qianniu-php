<?php
namespace Topsdk\Topapi\Ability139;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability139\Request\TaobaoMiniappUserInfoGetRequest;
use Topsdk\Topapi\Ability139\Request\TaobaoOpenlinkSessionGetRequest;

class Ability139 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        用户开放信息获取
    **/
    public function taobaoMiniappUserInfoGet(TaobaoMiniappUserInfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.userInfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取授权session信息
    **/
    public function taobaoOpenlinkSessionGet(TaobaoOpenlinkSessionGetRequest $request) {
        return $this->client->execute("taobao.openlink.session.get", $request->toMap(), $request->toFileParamMap());
    }
}