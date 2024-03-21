<?php
namespace Topsdk\Topapi\Ability306;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability306\Request\TaobaoSubusersSubaccountSearchRequest;

class Ability306 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        根据子账号登录名后缀模糊搜索子账号列表
    **/
    public function taobaoSubusersSubaccountSearch(TaobaoSubusersSubaccountSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.subaccount.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
}