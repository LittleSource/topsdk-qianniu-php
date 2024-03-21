<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoDeliveryTemplateDeleteRequest {

    /**
        运费模板ID
     **/
    private $templateId;


    public function getTemplateId() : int{
        return $this->templateId;
    }

    public function setTemplateId(int $templateId){
        $this->templateId = $templateId;
    }


    public function getApiName() : string {
        return "taobao.delivery.template.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->templateId)) {
            $requestParam["template_id"] = TopUtil::convertBasic($this->templateId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

