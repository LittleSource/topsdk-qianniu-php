<?php
namespace Topsdk\Topapi\Ability304\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopSecretGetRequest {

    /**
        秘钥版本号
     **/
    private $secretVersion;

    /**
        伪随机数
     **/
    private $randomNum;

    /**
        自定义用户id
     **/
    private $customerUserId;


    public function getSecretVersion() : int{
        return $this->secretVersion;
    }

    public function setSecretVersion(int $secretVersion){
        $this->secretVersion = $secretVersion;
    }

    public function getRandomNum() : string{
        return $this->randomNum;
    }

    public function setRandomNum(string $randomNum){
        $this->randomNum = $randomNum;
    }

    public function getCustomerUserId() : int{
        return $this->customerUserId;
    }

    public function setCustomerUserId(int $customerUserId){
        $this->customerUserId = $customerUserId;
    }


    public function getApiName() : string {
        return "taobao.top.secret.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->secretVersion)) {
            $requestParam["secret_version"] = TopUtil::convertBasic($this->secretVersion);
        }

        if (!TopUtil::checkEmpty($this->randomNum)) {
            $requestParam["random_num"] = TopUtil::convertBasic($this->randomNum);
        }

        if (!TopUtil::checkEmpty($this->customerUserId)) {
            $requestParam["customer_user_id"] = TopUtil::convertBasic($this->customerUserId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

