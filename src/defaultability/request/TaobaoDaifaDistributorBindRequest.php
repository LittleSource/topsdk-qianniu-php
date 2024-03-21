<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoDaifaDistributorBindRequest {

    /**
        供货商平台ID，优先通过ID获取，其次通过supplier_name获取
     **/
    private $supplierId;

    /**
        分销商平台ID
     **/
    private $distributorId;

    /**
        供货商平台名称
     **/
    private $supplierName;


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

    public function getSupplierName() : string{
        return $this->supplierName;
    }

    public function setSupplierName(string $supplierName){
        $this->supplierName = $supplierName;
    }


    public function getApiName() : string {
        return "taobao.daifa.distributor.bind";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->supplierId)) {
            $requestParam["supplier_id"] = TopUtil::convertBasic($this->supplierId);
        }

        if (!TopUtil::checkEmpty($this->distributorId)) {
            $requestParam["distributor_id"] = TopUtil::convertBasic($this->distributorId);
        }

        if (!TopUtil::checkEmpty($this->supplierName)) {
            $requestParam["supplier_name"] = TopUtil::convertBasic($this->supplierName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

