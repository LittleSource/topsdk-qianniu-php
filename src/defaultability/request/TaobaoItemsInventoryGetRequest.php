<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemsInventoryGetRequest {

    /**
        需返回的字段列表。可选值为 Item 商品结构体中的以下字段： 
approve_status,num_iid,title,nick,type,cid,pic_url,num,props,valid_thru, list_time,price,has_discount,has_invoice,has_warranty,has_showcase, modified,delist_time,postage_id,seller_cids,outer_id；字段之间用“,”分隔。<br> 
不支持其他字段，如果需要获取其他字段数据，调用taobao.item.seller.get。
     **/
    private $fields;

    /**
        搜索字段。搜索商品的title。
     **/
    private $q;

    /**
        商品类目ID。ItemCat中的cid字段。可以通过taobao.itemcats.get取到
     **/
    private $cid;

    /**
        卖家店铺内自定义类目ID。多个之间用“,”分隔。可以根据taobao.sellercats.list.get获得.(<font color="red">注：目前最多支持32个ID号传入</font>)
     **/
    private $sellerCids;

    /**
        页码。取值范围:大于零小于等于101的整数;默认值为1，即返回第一页数据。当页码超过101页时系统就会报错，故请大家在用此接口获取数据时尽可能的细化自己的搜索条件，例如根据修改时间分段获取商品。
     **/
    private $pageNo;

    /**
        每页条数。取值范围:大于零的整数;最大值：200；默认值：40。
     **/
    private $pageSize;

    /**
        排序方式。格式为column:asc/desc ，column可选值:list_time(上架时间),delist_time(下架时间),num(商品数量)，modified(最近修改时间);默认上架时间降序(即最新上架排在前面)。如按照上架时间降序排序方式为list_time:desc
     **/
    private $orderBy;

    /**
        是否参与会员折扣。可选值：true，false。默认不过滤该条件
     **/
    private $hasDiscount;

    /**
        商品是否在淘宝显示
     **/
    private $isTaobao;

    /**
        商品是否在外部网店显示
     **/
    private $isEx;

    /**
        分类字段。可选值:<br>
regular_shelved(定时上架)<br>
never_on_shelf(从未上架)<br>
off_shelf(我下架的)<br>
<font color='red'>for_shelved(等待所有上架)<br>
sold_out(全部卖完)<br>
violation_off_shelf(违规下架的)<br>
默认查询for_shelved(等待所有上架)这个状态的商品<br></font>
注：for_shelved(等待所有上架)=regular_shelved(定时上架)+never_on_shelf(从未上架)+off_shelf(我下架的)
     **/
    private $banner;

    /**
        商品起始修改时间
     **/
    private $startModified;

    /**
        商品结束修改时间
     **/
    private $endModified;

    /**
        商品类型：a-拍卖,b-一口价
     **/
    private $auctionType;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getQ() : string{
        return $this->q;
    }

    public function setQ(string $q){
        $this->q = $q;
    }

    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getSellerCids() : string{
        return $this->sellerCids;
    }

    public function setSellerCids(string $sellerCids){
        $this->sellerCids = $sellerCids;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getOrderBy() : string{
        return $this->orderBy;
    }

    public function setOrderBy(string $orderBy){
        $this->orderBy = $orderBy;
    }

    public function getHasDiscount() : bool{
        return $this->hasDiscount;
    }

    public function setHasDiscount(bool $hasDiscount){
        $this->hasDiscount = $hasDiscount;
    }

    public function getIsTaobao() : bool{
        return $this->isTaobao;
    }

    public function setIsTaobao(bool $isTaobao){
        $this->isTaobao = $isTaobao;
    }

    public function getIsEx() : bool{
        return $this->isEx;
    }

    public function setIsEx(bool $isEx){
        $this->isEx = $isEx;
    }

    public function getBanner() : string{
        return $this->banner;
    }

    public function setBanner(string $banner){
        $this->banner = $banner;
    }

    public function getStartModified() : string{
        return $this->startModified;
    }

    public function setStartModified(string $startModified){
        $this->startModified = $startModified;
    }

    public function getEndModified() : string{
        return $this->endModified;
    }

    public function setEndModified(string $endModified){
        $this->endModified = $endModified;
    }

    public function getAuctionType() : string{
        return $this->auctionType;
    }

    public function setAuctionType(string $auctionType){
        $this->auctionType = $auctionType;
    }


    public function getApiName() : string {
        return "taobao.items.inventory.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->q)) {
            $requestParam["q"] = TopUtil::convertBasic($this->q);
        }

        if (!TopUtil::checkEmpty($this->cid)) {
            $requestParam["cid"] = TopUtil::convertBasic($this->cid);
        }

        if (!TopUtil::checkEmpty($this->sellerCids)) {
            $requestParam["seller_cids"] = TopUtil::convertBasic($this->sellerCids);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->orderBy)) {
            $requestParam["order_by"] = TopUtil::convertBasic($this->orderBy);
        }

        if (!TopUtil::checkEmpty($this->hasDiscount)) {
            $requestParam["has_discount"] = TopUtil::convertBasic($this->hasDiscount);
        }

        if (!TopUtil::checkEmpty($this->isTaobao)) {
            $requestParam["is_taobao"] = TopUtil::convertBasic($this->isTaobao);
        }

        if (!TopUtil::checkEmpty($this->isEx)) {
            $requestParam["is_ex"] = TopUtil::convertBasic($this->isEx);
        }

        if (!TopUtil::checkEmpty($this->banner)) {
            $requestParam["banner"] = TopUtil::convertBasic($this->banner);
        }

        if (!TopUtil::checkEmpty($this->startModified)) {
            $requestParam["start_modified"] = TopUtil::convertBasic($this->startModified);
        }

        if (!TopUtil::checkEmpty($this->endModified)) {
            $requestParam["end_modified"] = TopUtil::convertBasic($this->endModified);
        }

        if (!TopUtil::checkEmpty($this->auctionType)) {
            $requestParam["auction_type"] = TopUtil::convertBasic($this->auctionType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

