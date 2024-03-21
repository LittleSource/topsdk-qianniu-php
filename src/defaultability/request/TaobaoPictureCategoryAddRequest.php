<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPictureCategoryAddRequest {

    /**
        图片分类名称，最大长度20字符，中文字符算2个字符，不能为空
     **/
    private $pictureCategoryName;

    /**
        图片分类的父分类,一级分类的parent_id为0,二级分类的则为其父分类的picture_category_id
     **/
    private $parentId;


    public function getPictureCategoryName() : string{
        return $this->pictureCategoryName;
    }

    public function setPictureCategoryName(string $pictureCategoryName){
        $this->pictureCategoryName = $pictureCategoryName;
    }

    public function getParentId() : int{
        return $this->parentId;
    }

    public function setParentId(int $parentId){
        $this->parentId = $parentId;
    }


    public function getApiName() : string {
        return "taobao.picture.category.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pictureCategoryName)) {
            $requestParam["picture_category_name"] = TopUtil::convertBasic($this->pictureCategoryName);
        }

        if (!TopUtil::checkEmpty($this->parentId)) {
            $requestParam["parent_id"] = TopUtil::convertBasic($this->parentId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

