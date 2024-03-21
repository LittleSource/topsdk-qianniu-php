<?php
namespace Topsdk\Topapi\Ability302\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability302\Domain\TaobaoFuwuSpBillreordAddBillRecordDto;

class TaobaoFuwuSpBillreordAddRequest {

    /**
        确认单的账单明细
     **/
    private $paramBillRecordDTO;


    public function getParamBillRecordDTO() : TaobaoFuwuSpBillreordAddBillRecordDto{
        return $this->paramBillRecordDTO;
    }

    public function setParamBillRecordDTO(TaobaoFuwuSpBillreordAddBillRecordDto $paramBillRecordDTO){
        $this->paramBillRecordDTO = $paramBillRecordDTO;
    }


    public function getApiName() : string {
        return "taobao.fuwu.sp.billreord.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramBillRecordDTO)) {
            $requestParam["param_bill_record_d_t_o"] = TopUtil::convertStruct($this->paramBillRecordDTO);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

