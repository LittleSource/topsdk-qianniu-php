<?php
namespace Topsdk\Topapi\Ability147\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemHscodeDetailGetRequest {

    /**
        hscode
     **/
    private $hscode;


    public function getHscode() : string{
        return $this->hscode;
    }

    public function setHscode(string $hscode){
        $this->hscode = $hscode;
    }


    public function getApiName() : string {
        return "tmall.item.hscode.detail.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->hscode)) {
            $requestParam["hscode"] = TopUtil::convertBasic($this->hscode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

