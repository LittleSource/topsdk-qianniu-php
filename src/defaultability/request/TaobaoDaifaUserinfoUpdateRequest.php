<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoDaifaUserinfoUpdateUpdateUserInfoRequest;

class TaobaoDaifaUserinfoUpdateRequest {

    /**
        入参对象
     **/
    private $updateUserInfoRequest;


    public function getUpdateUserInfoRequest() : TaobaoDaifaUserinfoUpdateUpdateUserInfoRequest{
        return $this->updateUserInfoRequest;
    }

    public function setUpdateUserInfoRequest(TaobaoDaifaUserinfoUpdateUpdateUserInfoRequest $updateUserInfoRequest){
        $this->updateUserInfoRequest = $updateUserInfoRequest;
    }


    public function getApiName() : string {
        return "taobao.daifa.userinfo.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->updateUserInfoRequest)) {
            $requestParam["update_user_info_request"] = TopUtil::convertStruct($this->updateUserInfoRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

