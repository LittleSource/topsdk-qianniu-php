<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPictureReplaceRequest {

    /**
        要替换的图片的id，必须大于0
     **/
    private $pictureId;

    /**
        图片二进制文件流,不能为空,允许png、jpg、gif图片格式
     **/
    private $imageData;


    public function getPictureId() : int{
        return $this->pictureId;
    }

    public function setPictureId(int $pictureId){
        $this->pictureId = $pictureId;
    }

    public function getImageData() : string{
        return $this->imageData;
    }

    public function setImageData(string $imageData){
        $this->imageData = $imageData;
    }


    public function getApiName() : string {
        return "taobao.picture.replace";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pictureId)) {
            $requestParam["picture_id"] = TopUtil::convertBasic($this->pictureId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->imageData)){
            $fileParam["image_data"] = TopUtil::convertBasic($this->imageData);
        }
        return $fileParam;
    }

}

