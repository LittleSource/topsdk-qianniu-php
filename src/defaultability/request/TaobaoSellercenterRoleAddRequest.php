<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSellercenterRoleAddRequest {

    /**
        表示卖家昵称
     **/
    private $nick;

    /**
        角色名
     **/
    private $name;

    /**
        角色描述
     **/
    private $description;

    /**
        需要授权的权限点permission_code列表,以","分割.其code值可以通过调用taobao.sellercenter.user.permissions.get返回，其中permission.is_authorize=1的权限点可以通过本接口授权给对应角色。
     **/
    private $permissionCodes;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getPermissionCodes() : array{
        return $this->permissionCodes;
    }

    public function setPermissionCodes(array $permissionCodes){
        $this->permissionCodes = $permissionCodes;
    }


    public function getApiName() : string {
        return "taobao.sellercenter.role.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->nick)) {
            $requestParam["nick"] = TopUtil::convertBasic($this->nick);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->description)) {
            $requestParam["description"] = TopUtil::convertBasic($this->description);
        }

        if (!TopUtil::checkEmpty($this->permissionCodes)) {
            $requestParam["permission_codes"] = TopUtil::convertBasicList($this->permissionCodes);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

