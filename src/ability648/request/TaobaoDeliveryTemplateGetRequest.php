<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoDeliveryTemplateGetRequest {

    /**
        需要查询的运费模板ID列表
     **/
    private $templateIds;

    /**
        需返回的字段列表。 <br/> 
<B>
可选值:示例中的值;各字段之间用","隔开
</B>
<br/><br/> 
<font color=blue>
template_id：查询模板ID <br/> 
template_name:查询模板名称 <br/> 
assumer：查询服务承担放 <br/> 
valuation:查询计价规则 <br/> 
supports:查询增值服务列表 <br/> 
created:查询模板创建时间 <br/> 
modified:查询修改时间<br/> 
consign_area_id:运费模板上设置的卖家发货地址最小级别ID<br/> 
address:卖家地址信息
</font>
<br/><br/> 
<font color=bule>
query_cod:查询货到付款运费信息<br/> 
query_post:查询平邮运费信息 <br/> 
query_express:查询快递公司运费信息 <br/> 
query_ems:查询EMS运费信息<br/> 
query_bzsd:查询普通保障速递运费信息<br/> 
query_wlb:查询物流宝保障速递运费信息<br/> 
query_furniture:查询家装物流运费信息
<font color=blue>
<br/><br/>
<font color=red>不能有空格</font>
     **/
    private $fields;

    /**
        在没有登录的情况下根据淘宝用户昵称查询指定的模板
     **/
    private $userNick;


    public function getTemplateIds() : array{
        return $this->templateIds;
    }

    public function setTemplateIds(array $templateIds){
        $this->templateIds = $templateIds;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getUserNick() : string{
        return $this->userNick;
    }

    public function setUserNick(string $userNick){
        $this->userNick = $userNick;
    }


    public function getApiName() : string {
        return "taobao.delivery.template.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->templateIds)) {
            $requestParam["template_ids"] = TopUtil::convertBasicList($this->templateIds);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->userNick)) {
            $requestParam["user_nick"] = TopUtil::convertBasic($this->userNick);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

