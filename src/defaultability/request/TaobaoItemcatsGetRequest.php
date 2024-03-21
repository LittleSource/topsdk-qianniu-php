<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemcatsGetRequest {

    /**
        商品所属类目ID列表，用半角逗号(,)分隔 例如:(18957,19562,) (cids、parent_cid至少传一个)
     **/
    private $cids;

    /**
        无效字段，暂无法使用。时间戳（格式:yyyy-MM-dd HH:mm:ss）如果该字段没有传，则取当前所有的类目信息,如果传了parent_cid或者cids，则忽略datetime，如果该字段传了，那么可以查询到该时间到现在为止的增量变化
     **/
    private $datetime;

    /**
        需要返回的字段列表，见ItemCat，默认返回：cid,parent_cid,name,is_parent；增量类目信息,根据fields传入的参数返回相应的结果。 features字段： 1、如果存在attr_key=freeze表示该类目被冻结了，attr_value=0,5，value可能存在2个值（也可能只有1个），用逗号分割，0表示禁编辑，5表示禁止发布
     **/
    private $fields;

    /**
        父商品类目 id，0表示根节点, 传输该参数返回所有子类目。 (cids、parent_cid至少传一个)
     **/
    private $parentCid;


    public function getCids() : array{
        return $this->cids;
    }

    public function setCids(array $cids){
        $this->cids = $cids;
    }

    public function getDatetime() : string{
        return $this->datetime;
    }

    public function setDatetime(string $datetime){
        $this->datetime = $datetime;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getParentCid() : int{
        return $this->parentCid;
    }

    public function setParentCid(int $parentCid){
        $this->parentCid = $parentCid;
    }


    public function getApiName() : string {
        return "taobao.itemcats.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cids)) {
            $requestParam["cids"] = TopUtil::convertBasicList($this->cids);
        }

        if (!TopUtil::checkEmpty($this->datetime)) {
            $requestParam["datetime"] = TopUtil::convertBasic($this->datetime);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->parentCid)) {
            $requestParam["parent_cid"] = TopUtil::convertBasic($this->parentCid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

