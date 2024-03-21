<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoFuwuScoresGetScoreResult {

    /**
        是否实际付费 1-实际付费 2-实际未付费
     **/
    public $is_pay;

    /**
        稳定性评分
     **/
    public $stability_score;

    /**
        交片速度
     **/
    public $rapid_score;

    /**
        平均分
     **/
    public $avg_score;

    /**
        是否为有效评分 1-有效评分 2-无效评分
     **/
    public $is_valid;

    /**
        评价id
     **/
    public $id;

    /**
        专业性评分
     **/
    public $prof_score;

    /**
        评价时间
     **/
    public $gmt_create;

    /**
        服务规格code
     **/
    public $item_code;

    /**
        服务规格名称
     **/
    public $item_name;

    /**
        服务态度评分
     **/
    public $attitude_score;

    /**
        描述相符
     **/
    public $matched_score;

    /**
        评论内容
     **/
    public $suggestion;

    /**
        服务code
     **/
    public $service_code;

    /**
        评价人用户昵称
     **/
    public $user_nick;

    /**
        易用性评分
     **/
    public $easyuse_score;


    public function getIsPay() : int{
        return $this->is_pay;
    }

    public function setIsPay(int $isPay){
        $this->is_pay = $isPay;
    }

    public function getStabilityScore() : string{
        return $this->stability_score;
    }

    public function setStabilityScore(string $stabilityScore){
        $this->stability_score = $stabilityScore;
    }

    public function getRapidScore() : string{
        return $this->rapid_score;
    }

    public function setRapidScore(string $rapidScore){
        $this->rapid_score = $rapidScore;
    }

    public function getAvgScore() : string{
        return $this->avg_score;
    }

    public function setAvgScore(string $avgScore){
        $this->avg_score = $avgScore;
    }

    public function getIsValid() : int{
        return $this->is_valid;
    }

    public function setIsValid(int $isValid){
        $this->is_valid = $isValid;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getProfScore() : string{
        return $this->prof_score;
    }

    public function setProfScore(string $profScore){
        $this->prof_score = $profScore;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getItemCode() : string{
        return $this->item_code;
    }

    public function setItemCode(string $itemCode){
        $this->item_code = $itemCode;
    }

    public function getItemName() : string{
        return $this->item_name;
    }

    public function setItemName(string $itemName){
        $this->item_name = $itemName;
    }

    public function getAttitudeScore() : string{
        return $this->attitude_score;
    }

    public function setAttitudeScore(string $attitudeScore){
        $this->attitude_score = $attitudeScore;
    }

    public function getMatchedScore() : string{
        return $this->matched_score;
    }

    public function setMatchedScore(string $matchedScore){
        $this->matched_score = $matchedScore;
    }

    public function getSuggestion() : string{
        return $this->suggestion;
    }

    public function setSuggestion(string $suggestion){
        $this->suggestion = $suggestion;
    }

    public function getServiceCode() : string{
        return $this->service_code;
    }

    public function setServiceCode(string $serviceCode){
        $this->service_code = $serviceCode;
    }

    public function getUserNick() : string{
        return $this->user_nick;
    }

    public function setUserNick(string $userNick){
        $this->user_nick = $userNick;
    }

    public function getEasyuseScore() : string{
        return $this->easyuse_score;
    }

    public function setEasyuseScore(string $easyuseScore){
        $this->easyuse_score = $easyuseScore;
    }


}

