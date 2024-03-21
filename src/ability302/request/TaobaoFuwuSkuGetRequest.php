<?php
namespace Topsdk\Topapi\Ability302\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoFuwuSkuGetRequest {

    /**
        服务code
     **/
    private $articleCode;

    /**
        用户的淘宝nick
     **/
    private $nick;


    public function getArticleCode() : string{
        return $this->articleCode;
    }

    public function setArticleCode(string $articleCode){
        $this->articleCode = $articleCode;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }


    public function getApiName() : string {
        return "taobao.fuwu.sku.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->articleCode)) {
            $requestParam["article_code"] = TopUtil::convertBasic($this->articleCode);
        }

        if (!TopUtil::checkEmpty($this->nick)) {
            $requestParam["nick"] = TopUtil::convertBasic($this->nick);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

