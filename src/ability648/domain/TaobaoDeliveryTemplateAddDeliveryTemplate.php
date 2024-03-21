<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoDeliveryTemplateAddDeliveryTemplate {

    /**
        模块ID
     **/
    public $template_id;

    /**
        模板创建时间
     **/
    public $created;


    public function getTemplateId() : int{
        return $this->template_id;
    }

    public function setTemplateId(int $templateId){
        $this->template_id = $templateId;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }


}

