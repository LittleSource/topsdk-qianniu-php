<?php
namespace Topsdk\Topapi\Ability314\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoJushitaJdpUserAddRequest {

    /**
        已废弃，使用页面中应用的配置。用户同步的数据类型,多个用','号分割。可选值：trade,refund,item
     **/
    private $topics;

    /**
        推送历史数据天数，只能为90天内，包含90天。当此参数不填时，表示以页面中应用配置的历史天数为准；如果为0表示这个用户不推送历史数据；其它表示推送的历史天数。
     **/
    private $historyDays;

    /**
        已废弃，新版订单同步服务不要使用。同步用户数据的机器IP,必须是界面配置的IP。
     **/
    private $hostIp;

    /**
        已废弃，新版订单同步服务不要使用。绑定类型，用户数据同步的机器名称。
     **/
    private $hostName;

    /**
        RDS实例名称
     **/
    private $rdsName;


    public function getTopics() : array{
        return $this->topics;
    }

    public function setTopics(array $topics){
        $this->topics = $topics;
    }

    public function getHistoryDays() : int{
        return $this->historyDays;
    }

    public function setHistoryDays(int $historyDays){
        $this->historyDays = $historyDays;
    }

    public function getHostIp() : string{
        return $this->hostIp;
    }

    public function setHostIp(string $hostIp){
        $this->hostIp = $hostIp;
    }

    public function getHostName() : string{
        return $this->hostName;
    }

    public function setHostName(string $hostName){
        $this->hostName = $hostName;
    }

    public function getRdsName() : string{
        return $this->rdsName;
    }

    public function setRdsName(string $rdsName){
        $this->rdsName = $rdsName;
    }


    public function getApiName() : string {
        return "taobao.jushita.jdp.user.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->topics)) {
            $requestParam["topics"] = TopUtil::convertBasicList($this->topics);
        }

        if (!TopUtil::checkEmpty($this->historyDays)) {
            $requestParam["history_days"] = TopUtil::convertBasic($this->historyDays);
        }

        if (!TopUtil::checkEmpty($this->hostIp)) {
            $requestParam["host_ip"] = TopUtil::convertBasic($this->hostIp);
        }

        if (!TopUtil::checkEmpty($this->hostName)) {
            $requestParam["host_name"] = TopUtil::convertBasic($this->hostName);
        }

        if (!TopUtil::checkEmpty($this->rdsName)) {
            $requestParam["rds_name"] = TopUtil::convertBasic($this->rdsName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

