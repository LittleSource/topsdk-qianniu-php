<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSubuserInfoUpdateRequest {

    /**
        子账号ID
     **/
    private $subId;

    /**
        子账号是否参与分流 true:参与分流 false:不参与分流
     **/
    private $isDispatch;

    /**
        是否停用子账号 true:表示停用该子账号false:表示开启该子账号
     **/
    private $isDisableSubaccount;


    public function getSubId() : int{
        return $this->subId;
    }

    public function setSubId(int $subId){
        $this->subId = $subId;
    }

    public function getIsDispatch() : bool{
        return $this->isDispatch;
    }

    public function setIsDispatch(bool $isDispatch){
        $this->isDispatch = $isDispatch;
    }

    public function getIsDisableSubaccount() : bool{
        return $this->isDisableSubaccount;
    }

    public function setIsDisableSubaccount(bool $isDisableSubaccount){
        $this->isDisableSubaccount = $isDisableSubaccount;
    }


    public function getApiName() : string {
        return "taobao.subuser.info.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->subId)) {
            $requestParam["sub_id"] = TopUtil::convertBasic($this->subId);
        }

        if (!TopUtil::checkEmpty($this->isDispatch)) {
            $requestParam["is_dispatch"] = TopUtil::convertBasic($this->isDispatch);
        }

        if (!TopUtil::checkEmpty($this->isDisableSubaccount)) {
            $requestParam["is_disable_subaccount"] = TopUtil::convertBasic($this->isDisableSubaccount);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

