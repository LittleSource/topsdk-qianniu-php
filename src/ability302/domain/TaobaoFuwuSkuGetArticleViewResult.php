<?php
namespace Topsdk\Topapi\Ability302\Domain;

class TaobaoFuwuSkuGetArticleViewResult {

    /**
        服务code
     **/
    public $article_code;

    /**
        服务简介
     **/
    public $article_commment;

    /**
        sku详情列表
     **/
    public $article_item_view_units;

    /**
        服务名称
     **/
    public $article_name;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误消息
     **/
    public $error_msg;

    /**
        用户淘宝nick
     **/
    public $nick;

    /**
        服务图片地址
     **/
    public $pict_url;


    public function getArticleCode() : string{
        return $this->article_code;
    }

    public function setArticleCode(string $articleCode){
        $this->article_code = $articleCode;
    }

    public function getArticleCommment() : string{
        return $this->article_commment;
    }

    public function setArticleCommment(string $articleCommment){
        $this->article_commment = $articleCommment;
    }

    public function getArticleItemViewUnits() : array{
        return $this->article_item_view_units;
    }

    public function setArticleItemViewUnits(array $articleItemViewUnits){
        $this->article_item_view_units = $articleItemViewUnits;
    }

    public function getArticleName() : string{
        return $this->article_name;
    }

    public function setArticleName(string $articleName){
        $this->article_name = $articleName;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getPictUrl() : string{
        return $this->pict_url;
    }

    public function setPictUrl(string $pictUrl){
        $this->pict_url = $pictUrl;
    }


}

