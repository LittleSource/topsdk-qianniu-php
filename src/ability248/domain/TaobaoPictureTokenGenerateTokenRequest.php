<?php
namespace Topsdk\Topapi\Ability248\Domain;

class TaobaoPictureTokenGenerateTokenRequest {

    /**
        请求策略
     **/
    public $upload_policy;


    public function getUploadPolicy() : TaobaoPictureTokenUploadPolicy{
        return $this->upload_policy;
    }

    public function setUploadPolicy(TaobaoPictureTokenUploadPolicy $uploadPolicy){
        $this->upload_policy = $uploadPolicy;
    }


}

