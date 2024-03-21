<?php
namespace Topsdk\Topapi\Ability248;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability248\Request\TaobaoPictureTokenRequest;

class Ability248 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取文件上传token
    **/
    public function taobaoPictureToken(TaobaoPictureTokenRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.token", $request->toMap(), $request->toFileParamMap(), $session);
    }
}