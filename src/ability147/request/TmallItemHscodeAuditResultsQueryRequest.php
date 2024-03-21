<?php
namespace Topsdk\Topapi\Ability147\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemHscodeAuditResultsQueryRequest {

    /**
        商品ID
     **/
    private $itemId;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }


    public function getApiName() : string {
        return "tmall.item.hscode.audit.results.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

