<?php
namespace Topsdk\Topapi\Ability314;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability314\Request\TaobaoJushitaJdpUsersGetRequest;
use Topsdk\Topapi\Ability314\Request\TaobaoJushitaJdpUserDeleteRequest;
use Topsdk\Topapi\Ability314\Request\TaobaoJushitaJdpUserAddRequest;

class Ability314 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取开通的订单同步服务的用户
    **/
    public function taobaoJushitaJdpUsersGet(TaobaoJushitaJdpUsersGetRequest $request) {
        return $this->client->execute("taobao.jushita.jdp.users.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        删除数据推送用户
    **/
    public function taobaoJushitaJdpUserDelete(TaobaoJushitaJdpUserDeleteRequest $request) {
        return $this->client->execute("taobao.jushita.jdp.user.delete", $request->toMap(), $request->toFileParamMap());
    }
    /**
        添加数据推送用户
    **/
    public function taobaoJushitaJdpUserAdd(TaobaoJushitaJdpUserAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jushita.jdp.user.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
}