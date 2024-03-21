<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPicturePicturesCountRequest {

    /**
        图片ID
     **/
    private $pictureId;

    /**
        图片分类
     **/
    private $pictureCategoryId;

    /**
        是否删除,undeleted代表没有删除,deleted表示删除
     **/
    private $deleted;

    /**
        图片被修改的时间点，格式:yyyy-MM-dd HH:mm:ss。查询此修改时间点之后到目前的图片。
     **/
    private $startModifiedDate;

    /**
        查询上传开始时间点,格式:yyyy-MM-dd HH:mm:ss
     **/
    private $startDate;

    /**
        查询上传结束时间点,格式:yyyy-MM-dd HH:mm:ss
     **/
    private $endDate;

    /**
        图片使用，如果是pc宝贝detail使用，设置为client:computer，查询出来的图片是符合pc的宝贝detail显示的如果是手机宝贝detail使用，设置为client:phone，查询出来的图片是符合手机的宝贝detail显示的,默认值是全部
     **/
    private $clientType;

    /**
        文件名
     **/
    private $title;


    public function getPictureId() : int{
        return $this->pictureId;
    }

    public function setPictureId(int $pictureId){
        $this->pictureId = $pictureId;
    }

    public function getPictureCategoryId() : int{
        return $this->pictureCategoryId;
    }

    public function setPictureCategoryId(int $pictureCategoryId){
        $this->pictureCategoryId = $pictureCategoryId;
    }

    public function getDeleted() : string{
        return $this->deleted;
    }

    public function setDeleted(string $deleted){
        $this->deleted = $deleted;
    }

    public function getStartModifiedDate() : string{
        return $this->startModifiedDate;
    }

    public function setStartModifiedDate(string $startModifiedDate){
        $this->startModifiedDate = $startModifiedDate;
    }

    public function getStartDate() : string{
        return $this->startDate;
    }

    public function setStartDate(string $startDate){
        $this->startDate = $startDate;
    }

    public function getEndDate() : string{
        return $this->endDate;
    }

    public function setEndDate(string $endDate){
        $this->endDate = $endDate;
    }

    public function getClientType() : string{
        return $this->clientType;
    }

    public function setClientType(string $clientType){
        $this->clientType = $clientType;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }


    public function getApiName() : string {
        return "taobao.picture.pictures.count";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pictureId)) {
            $requestParam["picture_id"] = TopUtil::convertBasic($this->pictureId);
        }

        if (!TopUtil::checkEmpty($this->pictureCategoryId)) {
            $requestParam["picture_category_id"] = TopUtil::convertBasic($this->pictureCategoryId);
        }

        if (!TopUtil::checkEmpty($this->deleted)) {
            $requestParam["deleted"] = TopUtil::convertBasic($this->deleted);
        }

        if (!TopUtil::checkEmpty($this->startModifiedDate)) {
            $requestParam["start_modified_date"] = TopUtil::convertBasic($this->startModifiedDate);
        }

        if (!TopUtil::checkEmpty($this->startDate)) {
            $requestParam["start_date"] = TopUtil::convertBasic($this->startDate);
        }

        if (!TopUtil::checkEmpty($this->endDate)) {
            $requestParam["end_date"] = TopUtil::convertBasic($this->endDate);
        }

        if (!TopUtil::checkEmpty($this->clientType)) {
            $requestParam["client_type"] = TopUtil::convertBasic($this->clientType);
        }

        if (!TopUtil::checkEmpty($this->title)) {
            $requestParam["title"] = TopUtil::convertBasic($this->title);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

