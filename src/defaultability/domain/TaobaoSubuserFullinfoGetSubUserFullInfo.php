<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSubuserFullinfoGetSubUserFullInfo {

    /**
        工作地点
     **/
    public $work_location;

    /**
        员工性别  1:男;  2:女
     **/
    public $sex;

    /**
        子账号Id
     **/
    public $sub_id;

    /**
        员工花名
     **/
    public $employee_nickname;

    /**
        子账号当前状态：1正常，2卖家停用，3处罚冻结
     **/
    public $sub_status;

    /**
        部门Id
     **/
    public $department_id;

    /**
        职务等级
     **/
    public $duty_level;

    /**
        子账号是否参与分流 true:参与分流 false:未参与分流
     **/
    public $sub_dispatch_status;

    /**
        主账号企业邮箱
     **/
    public $user_email;

    /**
        子账号是否已欠费 true:已欠费 false:未欠费
     **/
    public $sub_owed_status;

    /**
        职务名称
     **/
    public $duty_name;

    /**
        员工姓名
     **/
    public $employee_name;

    /**
        直接上级的员工ID
     **/
    public $leader_id;

    /**
        入职员工工号
     **/
    public $employee_num;

    /**
        父部门Id
     **/
    public $parent_department;

    /**
        职务Id
     **/
    public $duty_id;

    /**
        员工入职时间
     **/
    public $entry_date;

    /**
        主账号Id
     **/
    public $user_id;

    /**
        部门名称
     **/
    public $department_name;

    /**
        员工ID
     **/
    public $employee_id;

    /**
        子账号用户名
     **/
    public $sub_nick;

    /**
        主账号用户名
     **/
    public $user_nick;

    /**
        办公电话
     **/
    public $office_phone;

    /**
        子账号企业邮箱
     **/
    public $subuser_email;


    public function getWorkLocation() : string{
        return $this->work_location;
    }

    public function setWorkLocation(string $workLocation){
        $this->work_location = $workLocation;
    }

    public function getSex() : int{
        return $this->sex;
    }

    public function setSex(int $sex){
        $this->sex = $sex;
    }

    public function getSubId() : int{
        return $this->sub_id;
    }

    public function setSubId(int $subId){
        $this->sub_id = $subId;
    }

    public function getEmployeeNickname() : string{
        return $this->employee_nickname;
    }

    public function setEmployeeNickname(string $employeeNickname){
        $this->employee_nickname = $employeeNickname;
    }

    public function getSubStatus() : int{
        return $this->sub_status;
    }

    public function setSubStatus(int $subStatus){
        $this->sub_status = $subStatus;
    }

    public function getDepartmentId() : int{
        return $this->department_id;
    }

    public function setDepartmentId(int $departmentId){
        $this->department_id = $departmentId;
    }

    public function getDutyLevel() : int{
        return $this->duty_level;
    }

    public function setDutyLevel(int $dutyLevel){
        $this->duty_level = $dutyLevel;
    }

    public function getSubDispatchStatus() : bool{
        return $this->sub_dispatch_status;
    }

    public function setSubDispatchStatus(bool $subDispatchStatus){
        $this->sub_dispatch_status = $subDispatchStatus;
    }

    public function getUserEmail() : string{
        return $this->user_email;
    }

    public function setUserEmail(string $userEmail){
        $this->user_email = $userEmail;
    }

    public function getSubOwedStatus() : bool{
        return $this->sub_owed_status;
    }

    public function setSubOwedStatus(bool $subOwedStatus){
        $this->sub_owed_status = $subOwedStatus;
    }

    public function getDutyName() : string{
        return $this->duty_name;
    }

    public function setDutyName(string $dutyName){
        $this->duty_name = $dutyName;
    }

    public function getEmployeeName() : string{
        return $this->employee_name;
    }

    public function setEmployeeName(string $employeeName){
        $this->employee_name = $employeeName;
    }

    public function getLeaderId() : int{
        return $this->leader_id;
    }

    public function setLeaderId(int $leaderId){
        $this->leader_id = $leaderId;
    }

    public function getEmployeeNum() : string{
        return $this->employee_num;
    }

    public function setEmployeeNum(string $employeeNum){
        $this->employee_num = $employeeNum;
    }

    public function getParentDepartment() : int{
        return $this->parent_department;
    }

    public function setParentDepartment(int $parentDepartment){
        $this->parent_department = $parentDepartment;
    }

    public function getDutyId() : int{
        return $this->duty_id;
    }

    public function setDutyId(int $dutyId){
        $this->duty_id = $dutyId;
    }

    public function getEntryDate() : string{
        return $this->entry_date;
    }

    public function setEntryDate(string $entryDate){
        $this->entry_date = $entryDate;
    }

    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getDepartmentName() : string{
        return $this->department_name;
    }

    public function setDepartmentName(string $departmentName){
        $this->department_name = $departmentName;
    }

    public function getEmployeeId() : int{
        return $this->employee_id;
    }

    public function setEmployeeId(int $employeeId){
        $this->employee_id = $employeeId;
    }

    public function getSubNick() : string{
        return $this->sub_nick;
    }

    public function setSubNick(string $subNick){
        $this->sub_nick = $subNick;
    }

    public function getUserNick() : string{
        return $this->user_nick;
    }

    public function setUserNick(string $userNick){
        $this->user_nick = $userNick;
    }

    public function getOfficePhone() : string{
        return $this->office_phone;
    }

    public function setOfficePhone(string $officePhone){
        $this->office_phone = $officePhone;
    }

    public function getSubuserEmail() : string{
        return $this->subuser_email;
    }

    public function setSubuserEmail(string $subuserEmail){
        $this->subuser_email = $subuserEmail;
    }


}

