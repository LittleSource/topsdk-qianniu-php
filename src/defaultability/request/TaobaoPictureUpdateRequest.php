<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPictureUpdateRequest {

    /**
        要更改名字的图片的id
     **/
    private $pictureId;

    /**
        新的图片名，最大长度50字符，不能为空
     **/
    private $newName;


    public function getPictureId() : int{
        return $this->pictureId;
    }

    public function setPictureId(int $pictureId){
        $this->pictureId = $pictureId;
    }

    public function getNewName() : string{
        return $this->newName;
    }

    public function setNewName(string $newName){
        $this->newName = $newName;
    }


    public function getApiName() : string {
        return "taobao.picture.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pictureId)) {
            $requestParam["picture_id"] = TopUtil::convertBasic($this->pictureId);
        }

        if (!TopUtil::checkEmpty($this->newName)) {
            $requestParam["new_name"] = TopUtil::convertBasic($this->newName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

