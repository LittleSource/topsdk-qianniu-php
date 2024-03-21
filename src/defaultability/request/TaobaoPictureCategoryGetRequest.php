<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPictureCategoryGetRequest {

    /**
        图片分类ID
     **/
    private $pictureCategoryId;

    /**
        图片分类名，不支持模糊查询
     **/
    private $pictureCategoryName;

    /**
        1
     **/
    private $type;

    /**
        取二级分类时设置为对应父分类id
取一级分类时父分类id设为0
取全部分类的时候不设或设为-1
     **/
    private $parentId;

    /**
        图片分类的修改时间点，格式:yyyy-MM-dd HH:mm:ss。查询此修改时间点之后到目前的图片分类。
     **/
    private $modifiedTime;


    public function getPictureCategoryId() : int{
        return $this->pictureCategoryId;
    }

    public function setPictureCategoryId(int $pictureCategoryId){
        $this->pictureCategoryId = $pictureCategoryId;
    }

    public function getPictureCategoryName() : string{
        return $this->pictureCategoryName;
    }

    public function setPictureCategoryName(string $pictureCategoryName){
        $this->pictureCategoryName = $pictureCategoryName;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getParentId() : int{
        return $this->parentId;
    }

    public function setParentId(int $parentId){
        $this->parentId = $parentId;
    }

    public function getModifiedTime() : string{
        return $this->modifiedTime;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modifiedTime = $modifiedTime;
    }


    public function getApiName() : string {
        return "taobao.picture.category.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pictureCategoryId)) {
            $requestParam["picture_category_id"] = TopUtil::convertBasic($this->pictureCategoryId);
        }

        if (!TopUtil::checkEmpty($this->pictureCategoryName)) {
            $requestParam["picture_category_name"] = TopUtil::convertBasic($this->pictureCategoryName);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        if (!TopUtil::checkEmpty($this->parentId)) {
            $requestParam["parent_id"] = TopUtil::convertBasic($this->parentId);
        }

        if (!TopUtil::checkEmpty($this->modifiedTime)) {
            $requestParam["modified_time"] = TopUtil::convertBasic($this->modifiedTime);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

