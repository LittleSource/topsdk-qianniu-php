<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoPictureGetPicture {

    /**
        图片ID
     **/
    public $picture_id;

    /**
        图片分类ID
     **/
    public $picture_category_id;

    /**
        返回的是绝对路径如：http://img07.taobaocdn.com/imgextra/i7/22670458/T2dD0kXb4cXXXXXXXX_!!22670458.jpg
     **/
    public $picture_path;

    /**
        图片标题
     **/
    public $title;

    /**
        图片大小,bite单位
     **/
    public $sizes;

    /**
        图片相素,格式:长x宽，如450x150
     **/
    public $pixel;

    /**
        图片状态,0 未审核没冻结 1  冻结 2 审核通过
     **/
    public $status;

    /**
        图片是否删除的标记
     **/
    public $deleted;

    /**
        图片上传的来源，有电脑版本宝贝发布，手机版本宝贝发布
     **/
    public $client_type;

    /**
        图片的创建时间
     **/
    public $created;

    /**
        图片的修改时间
     **/
    public $modified;

    /**
        图片在后台处理之后的md5值当md5值为32位长度的字符串时为图片搬家后的文件md5验证码md5值为长整数时为图片替换后的时间戳
     **/
    public $md5;

    /**
        图片是否被引用
     **/
    public $referenced;


    public function getPictureId() : int{
        return $this->picture_id;
    }

    public function setPictureId(int $pictureId){
        $this->picture_id = $pictureId;
    }

    public function getPictureCategoryId() : int{
        return $this->picture_category_id;
    }

    public function setPictureCategoryId(int $pictureCategoryId){
        $this->picture_category_id = $pictureCategoryId;
    }

    public function getPicturePath() : string{
        return $this->picture_path;
    }

    public function setPicturePath(string $picturePath){
        $this->picture_path = $picturePath;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getSizes() : int{
        return $this->sizes;
    }

    public function setSizes(int $sizes){
        $this->sizes = $sizes;
    }

    public function getPixel() : string{
        return $this->pixel;
    }

    public function setPixel(string $pixel){
        $this->pixel = $pixel;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getDeleted() : string{
        return $this->deleted;
    }

    public function setDeleted(string $deleted){
        $this->deleted = $deleted;
    }

    public function getClientType() : string{
        return $this->client_type;
    }

    public function setClientType(string $clientType){
        $this->client_type = $clientType;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getMd5() : string{
        return $this->md5;
    }

    public function setMd5(string $md5){
        $this->md5 = $md5;
    }

    public function getReferenced() : bool{
        return $this->referenced;
    }

    public function setReferenced(bool $referenced){
        $this->referenced = $referenced;
    }


}

