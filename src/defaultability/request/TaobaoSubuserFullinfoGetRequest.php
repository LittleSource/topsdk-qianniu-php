<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSubuserFullinfoGetRequest {

    /**
        子账号用户名（传参中sub_id和sub_nick至少需要其中一个，若sub_id与sub_nick同时传入并且合法，那么sub_nick优先，以sub_nick查询子账号）
     **/
    private $subNick;

    /**
        子账号ID（传参中sub_id和sub_nick至少需要其中一个，若sub_id与sub_nick同时传入并且合法，那么sub_nick优先，以sub_nick查询子账号）
     **/
    private $subId;

    /**
        传入所需要的参数信息（若不需要获取子账号或主账号的企业邮箱地址，则无需传入该参数；若需要获取子账号或主账号的企业邮箱地址，则需要传入fields；可选参数值为subuser_email和user_email，传入其他参数值均无效；两个参数都需要则以逗号隔开传入即可，例如：subuser_email,user_email）
     **/
    private $fields;


    public function getSubNick() : string{
        return $this->subNick;
    }

    public function setSubNick(string $subNick){
        $this->subNick = $subNick;
    }

    public function getSubId() : int{
        return $this->subId;
    }

    public function setSubId(int $subId){
        $this->subId = $subId;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "taobao.subuser.fullinfo.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->subNick)) {
            $requestParam["sub_nick"] = TopUtil::convertBasic($this->subNick);
        }

        if (!TopUtil::checkEmpty($this->subId)) {
            $requestParam["sub_id"] = TopUtil::convertBasic($this->subId);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

