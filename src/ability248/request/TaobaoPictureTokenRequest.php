<?php
namespace Topsdk\Topapi\Ability248\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability248\Domain\TaobaoPictureTokenGenerateTokenRequest;

class TaobaoPictureTokenRequest {

    /**
        请求参数
     **/
    private $generateTokenRequest;


    public function getGenerateTokenRequest() : TaobaoPictureTokenGenerateTokenRequest{
        return $this->generateTokenRequest;
    }

    public function setGenerateTokenRequest(TaobaoPictureTokenGenerateTokenRequest $generateTokenRequest){
        $this->generateTokenRequest = $generateTokenRequest;
    }


    public function getApiName() : string {
        return "taobao.picture.token";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->generateTokenRequest)) {
            $requestParam["generate_token_request"] = TopUtil::convertStruct($this->generateTokenRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

