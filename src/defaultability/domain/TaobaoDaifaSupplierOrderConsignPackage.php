<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaSupplierOrderConsignPackage {

    /**
        运单号
     **/
    public $out_sid;

    /**
        快递公司码
     **/
    public $company_code;


    public function getOutSid() : string{
        return $this->out_sid;
    }

    public function setOutSid(string $outSid){
        $this->out_sid = $outSid;
    }

    public function getCompanyCode() : string{
        return $this->company_code;
    }

    public function setCompanyCode(string $companyCode){
        $this->company_code = $companyCode;
    }


}

