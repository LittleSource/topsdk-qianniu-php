<?php
namespace Topsdk\Topapi\Ability304;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability304\Request\TaobaoAppipGetRequest;
use Topsdk\Topapi\Ability304\Request\TaobaoFilesGetRequest;
use Topsdk\Topapi\Ability304\Request\TaobaoTopAuthTokenRefreshRequest;
use Topsdk\Topapi\Ability304\Request\TaobaoTopAuthTokenCreateRequest;
use Topsdk\Topapi\Ability304\Request\TaobaoHttpdnsGetRequest;
use Topsdk\Topapi\Ability304\Request\TaobaoTopSdkFeedbackUploadRequest;
use Topsdk\Topapi\Ability304\Request\TaobaoOpenuidGetRequest;
use Topsdk\Topapi\Ability304\Request\TaobaoOpenuidGetBytradeRequest;
use Topsdk\Topapi\Ability304\Request\TaobaoTopSecretGetRequest;
use Topsdk\Topapi\Ability304\Request\TaobaoOpenuidGetBymixnickRequest;

class Ability304 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取ISV发起请求服务器IP
    **/
    public function taobaoAppipGet(TaobaoAppipGetRequest $request) {
        return $this->client->execute("taobao.appip.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        业务文件获取
    **/
    public function taobaoFilesGet(TaobaoFilesGetRequest $request) {
        return $this->client->execute("taobao.files.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        刷新Access Token
    **/
    public function taobaoTopAuthTokenRefresh(TaobaoTopAuthTokenRefreshRequest $request) {
        return $this->client->execute("taobao.top.auth.token.refresh", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取Access Token
    **/
    public function taobaoTopAuthTokenCreate(TaobaoTopAuthTokenCreateRequest $request) {
        return $this->client->execute("taobao.top.auth.token.create", $request->toMap(), $request->toFileParamMap());
    }
    /**
        TOPDNS配置
    **/
    public function taobaoHttpdnsGet(TaobaoHttpdnsGetRequest $request) {
        return $this->client->execute("taobao.httpdns.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        sdk信息回调
    **/
    public function taobaoTopSdkFeedbackUpload(TaobaoTopSdkFeedbackUploadRequest $request) {
        return $this->client->execute("taobao.top.sdk.feedback.upload", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取授权账号对应的OpenUid
    **/
    public function taobaoOpenuidGet(TaobaoOpenuidGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.openuid.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过订单获取对应买家的openUID
    **/
    public function taobaoOpenuidGetBytrade(TaobaoOpenuidGetBytradeRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.openuid.get.bytrade", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取TOP通道解密秘钥
    **/
    public function taobaoTopSecretGet(TaobaoTopSecretGetRequest $request) {
        return $this->client->execute("taobao.top.secret.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        通过mixnick转换openuid
    **/
    public function taobaoOpenuidGetBymixnick(TaobaoOpenuidGetBymixnickRequest $request) {
        return $this->client->execute("taobao.openuid.get.bymixnick", $request->toMap(), $request->toFileParamMap());
    }
}