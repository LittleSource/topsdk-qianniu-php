<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPictureCategoryUpdateRequest {

    /**
        要更新的图片分类的id
     **/
    private $categoryId;

    /**
        图片分类的新名字，最大长度20字符，不能为空
     **/
    private $categoryName;

    /**
        图片分类的新父分类id
     **/
    private $parentId;


    public function getCategoryId() : int{
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId){
        $this->categoryId = $categoryId;
    }

    public function getCategoryName() : string{
        return $this->categoryName;
    }

    public function setCategoryName(string $categoryName){
        $this->categoryName = $categoryName;
    }

    public function getParentId() : int{
        return $this->parentId;
    }

    public function setParentId(int $parentId){
        $this->parentId = $parentId;
    }


    public function getApiName() : string {
        return "taobao.picture.category.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->categoryId)) {
            $requestParam["category_id"] = TopUtil::convertBasic($this->categoryId);
        }

        if (!TopUtil::checkEmpty($this->categoryName)) {
            $requestParam["category_name"] = TopUtil::convertBasic($this->categoryName);
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

