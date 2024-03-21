<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPictureUploadRequest {

    /**
        如果此参数大于0，而且在后台能查到对应的图片，则此次上传为原图替换
     **/
    private $pictureId;

    /**
        图片分类ID，设置具体某个分类ID或设置0上传到默认分类，只能传入一个分类
     **/
    private $pictureCategoryId;

    /**
        图片二进制文件流,不能为空,允许png、jpg、gif图片格式,3M以内。
     **/
    private $img;

    /**
        包括后缀名的图片标题,不能为空，如Bule.jpg,有些卖家希望图片上传后取图片文件的默认名
     **/
    private $imageInputTitle;

    /**
        图片标题,如果为空,传的图片标题就取去掉后缀名的image_input_title,超过50字符长度会截取50字符,重名会在标题末尾加"(1)";标题末尾已经有"(数字)"了，则数字加1
     **/
    private $title;

    /**
        图片上传的来源，有电脑版本宝贝发布，手机版本宝贝发布client:computer电脑版本宝贝使用，client:phone手机版本宝贝使用。注意：当client:phone时，图片限制为宽度在480-620之间，长度不能超过960，否则会报错。
     **/
    private $clientType;

    /**
        是否获取https连接
     **/
    private $isHttps;


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

    public function getImg() : string{
        return $this->img;
    }

    public function setImg(string $img){
        $this->img = $img;
    }

    public function getImageInputTitle() : string{
        return $this->imageInputTitle;
    }

    public function setImageInputTitle(string $imageInputTitle){
        $this->imageInputTitle = $imageInputTitle;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getClientType() : string{
        return $this->clientType;
    }

    public function setClientType(string $clientType){
        $this->clientType = $clientType;
    }

    public function getIsHttps() : bool{
        return $this->isHttps;
    }

    public function setIsHttps(bool $isHttps){
        $this->isHttps = $isHttps;
    }


    public function getApiName() : string {
        return "taobao.picture.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pictureId)) {
            $requestParam["picture_id"] = TopUtil::convertBasic($this->pictureId);
        }

        if (!TopUtil::checkEmpty($this->pictureCategoryId)) {
            $requestParam["picture_category_id"] = TopUtil::convertBasic($this->pictureCategoryId);
        }

        if (!TopUtil::checkEmpty($this->imageInputTitle)) {
            $requestParam["image_input_title"] = TopUtil::convertBasic($this->imageInputTitle);
        }

        if (!TopUtil::checkEmpty($this->title)) {
            $requestParam["title"] = TopUtil::convertBasic($this->title);
        }

        if (!TopUtil::checkEmpty($this->clientType)) {
            $requestParam["client_type"] = TopUtil::convertBasic($this->clientType);
        }

        if (!TopUtil::checkEmpty($this->isHttps)) {
            $requestParam["is_https"] = TopUtil::convertBasic($this->isHttps);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->img)){
            $fileParam["img"] = TopUtil::convertBasic($this->img);
        }
        return $fileParam;
    }

}

