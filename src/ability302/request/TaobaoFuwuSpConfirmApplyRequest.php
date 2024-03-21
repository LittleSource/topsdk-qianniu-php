<?php
namespace Topsdk\Topapi\Ability302\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability302\Domain\TaobaoFuwuSpConfirmApplyIncomeConfirmDto;

class TaobaoFuwuSpConfirmApplyRequest {

    /**
        确认单申请
     **/
    private $paramIncomeConfirmDTO;


    public function getParamIncomeConfirmDTO() : TaobaoFuwuSpConfirmApplyIncomeConfirmDto{
        return $this->paramIncomeConfirmDTO;
    }

    public function setParamIncomeConfirmDTO(TaobaoFuwuSpConfirmApplyIncomeConfirmDto $paramIncomeConfirmDTO){
        $this->paramIncomeConfirmDTO = $paramIncomeConfirmDTO;
    }


    public function getApiName() : string {
        return "taobao.fuwu.sp.confirm.apply";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramIncomeConfirmDTO)) {
            $requestParam["param_income_confirm_d_t_o"] = TopUtil::convertStruct($this->paramIncomeConfirmDTO);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

