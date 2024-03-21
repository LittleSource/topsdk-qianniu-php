<?php
namespace Topsdk\Topapi\Ability304\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopAuthTokenRefreshRequest {

    /**
        grantType==refresh_token 时需要
     **/
    private $refreshToken;


    public function getRefreshToken() : string{
        return $this->refreshToken;
    }

    public function setRefreshToken(string $refreshToken){
        $this->refreshToken = $refreshToken;
    }


    public function getApiName() : string {
        return "taobao.top.auth.token.refresh";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->refreshToken)) {
            $requestParam["refresh_token"] = TopUtil::convertBasic($this->refreshToken);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

