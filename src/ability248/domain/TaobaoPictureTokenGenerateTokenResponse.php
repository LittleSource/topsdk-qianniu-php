<?php
namespace Topsdk\Topapi\Ability248\Domain;

class TaobaoPictureTokenGenerateTokenResponse {

    /**
        返回的token
     **/
    public $token;


    public function getToken() : string{
        return $this->token;
    }

    public function setToken(string $token){
        $this->token = $token;
    }


}

