<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoVasSubscribeGetRequest {

    /**
        淘宝会员名
     **/
    private $nick;

    /**
        商品编码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得该应用的商品代码
     **/
    private $articleCode;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getArticleCode() : string{
        return $this->articleCode;
    }

    public function setArticleCode(string $articleCode){
        $this->articleCode = $articleCode;
    }


    public function getApiName() : string {
        return "taobao.vas.subscribe.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->nick)) {
            $requestParam["nick"] = TopUtil::convertBasic($this->nick);
        }

        if (!TopUtil::checkEmpty($this->articleCode)) {
            $requestParam["article_code"] = TopUtil::convertBasic($this->articleCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

