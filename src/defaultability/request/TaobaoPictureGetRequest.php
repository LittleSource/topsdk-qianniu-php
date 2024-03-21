<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPictureGetRequest {

    /**
        图片url查询接口
     **/
    private $urls;

    /**
        是否获取https的链接
     **/
    private $isHttps;

    /**
        图片ID
     **/
    private $pictureId;

    /**
        图片分类ID
     **/
    private $pictureCategoryId;

    /**
        是否删除,unfroze代表没有删除
     **/
    private $deleted;

    /**
        图片被修改的时间点，格式:yyyy-MM-dd HH:mm:ss。查询此修改时间点之后到目前的图片。
     **/
    private $modifiedTime;

    /**
        图片标题,最大长度50字符,中英文都算一字符
     **/
    private $title;

    /**
        查询上传开始时间点,格式:yyyy-MM-dd HH:mm:ss
     **/
    private $startDate;

    /**
        查询上传结束时间点,格式:yyyy-MM-dd HH:mm:ss
     **/
    private $endDate;

    /**
        页码.传入值为1代表第一页,传入值为2代表第二页,依此类推,默认值为1
     **/
    private $pageNo;

    /**
        每页条数.每页返回最多返回100条,默认值40
     **/
    private $pageSize;

    /**
        图片使用，如果是pc宝贝detail使用，设置为client:computer，查询出来的图片是符合pc的宝贝detail显示的如果是手机宝贝detail使用，设置为client:phone，查询出来的图片是符合手机的宝贝detail显示的,默认值是全部
     **/
    private $clientType;

    /**
        图片查询结果排序,time:desc按上传时间从晚到早(默认), time:asc按上传时间从早到晚,sizes:desc按图片从大到小，sizes:asc按图片从小到大,默认time:desc
     **/
    private $orderBy;


    public function getUrls() : string{
        return $this->urls;
    }

    public function setUrls(string $urls){
        $this->urls = $urls;
    }

    public function getIsHttps() : bool{
        return $this->isHttps;
    }

    public function setIsHttps(bool $isHttps){
        $this->isHttps = $isHttps;
    }

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

    public function getModifiedTime() : string{
        return $this->modifiedTime;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modifiedTime = $modifiedTime;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
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

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getClientType() : string{
        return $this->clientType;
    }

    public function setClientType(string $clientType){
        $this->clientType = $clientType;
    }

    public function getOrderBy() : string{
        return $this->orderBy;
    }

    public function setOrderBy(string $orderBy){
        $this->orderBy = $orderBy;
    }


    public function getApiName() : string {
        return "taobao.picture.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->urls)) {
            $requestParam["urls"] = TopUtil::convertBasic($this->urls);
        }

        if (!TopUtil::checkEmpty($this->isHttps)) {
            $requestParam["is_https"] = TopUtil::convertBasic($this->isHttps);
        }

        if (!TopUtil::checkEmpty($this->pictureId)) {
            $requestParam["picture_id"] = TopUtil::convertBasic($this->pictureId);
        }

        if (!TopUtil::checkEmpty($this->pictureCategoryId)) {
            $requestParam["picture_category_id"] = TopUtil::convertBasic($this->pictureCategoryId);
        }

        if (!TopUtil::checkEmpty($this->deleted)) {
            $requestParam["deleted"] = TopUtil::convertBasic($this->deleted);
        }

        if (!TopUtil::checkEmpty($this->modifiedTime)) {
            $requestParam["modified_time"] = TopUtil::convertBasic($this->modifiedTime);
        }

        if (!TopUtil::checkEmpty($this->title)) {
            $requestParam["title"] = TopUtil::convertBasic($this->title);
        }

        if (!TopUtil::checkEmpty($this->startDate)) {
            $requestParam["start_date"] = TopUtil::convertBasic($this->startDate);
        }

        if (!TopUtil::checkEmpty($this->endDate)) {
            $requestParam["end_date"] = TopUtil::convertBasic($this->endDate);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->clientType)) {
            $requestParam["client_type"] = TopUtil::convertBasic($this->clientType);
        }

        if (!TopUtil::checkEmpty($this->orderBy)) {
            $requestParam["order_by"] = TopUtil::convertBasic($this->orderBy);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

