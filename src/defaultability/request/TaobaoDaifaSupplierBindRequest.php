<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoDaifaSupplierBindRequest {

    /**
        供货商平台ID
     **/
    private $supplierId;

    /**
        分销商平台ID，传了ID优先取ID，否则取distributor_name
     **/
    private $distributorId;

    /**
        分销商平台名称
     **/
    private $distributorName;


    public function getSupplierId() : int{
        return $this->supplierId;
    }

    public function setSupplierId(int $supplierId){
        $this->supplierId = $supplierId;
    }

    public function getDistributorId() : int{
        return $this->distributorId;
    }

    public function setDistributorId(int $distributorId){
        $this->distributorId = $distributorId;
    }

    public function getDistributorName() : string{
        return $this->distributorName;
    }

    public function setDistributorName(string $distributorName){
        $this->distributorName = $distributorName;
    }


    public function getApiName() : string {
        return "taobao.daifa.supplier.bind";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->supplierId)) {
            $requestParam["supplier_id"] = TopUtil::convertBasic($this->supplierId);
        }

        if (!TopUtil::checkEmpty($this->distributorId)) {
            $requestParam["distributor_id"] = TopUtil::convertBasic($this->distributorId);
        }

        if (!TopUtil::checkEmpty($this->distributorName)) {
            $requestParam["distributor_name"] = TopUtil::convertBasic($this->distributorName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

