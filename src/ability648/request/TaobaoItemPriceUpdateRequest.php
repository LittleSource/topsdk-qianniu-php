<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemPriceUpdateRequest {

    /**
        商品数字ID，该参数必须
     **/
    private $numIid;

    /**
        商品上传后的状态。可选值:onsale（出售中）,instock（库中），如果同时更新商品状态为出售中及list_time为将来的时间，则商品还是处于定时上架的状态, 此时item.is_timing为true
     **/
    private $approveStatus;

    /**
        自动重发。可选值:true,false;
     **/
    private $autoRepost;

    /**
        叶子类目id
     **/
    private $cid;

    /**
        商品描述. 字数要大于5个字符，小于25000个字符 ，受违禁词控制
     **/
    private $desc;

    /**
        有效期。可选值:7,14;单位:天;
     **/
    private $validThru;

    /**
        平邮费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:5.07，表示:5元7分, 注:post_fee,express_fee,ems_fee需一起填写
     **/
    private $postFee;

    /**
        快递费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:15.07，表示:15元7分
     **/
    private $expressFee;

    /**
        ems费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:25.07，表示:25元7分
     **/
    private $emsFee;

    /**
        是否有保修。可选值:true,false;
     **/
    private $hasWarranty;

    /**
        是否有发票。可选值:true,false (商城卖家此字段必须为true)
     **/
    private $hasInvoice;

    /**
        加价幅度 如果为0，代表系统代理幅度
     **/
    private $increment;

    /**
        商品属性列表。格式:pid:vid;pid:vid。属性的pid调用taobao.itemprops.get取得，属性值的vid用taobao.itempropvalues.get取得vid。 如果该类目下面没有属性，可以不用填写。如果有属性，必选属性必填，其他非必选属性可以选择不填写.属性不能超过35对。所有属性加起来包括分割符不能超过549字节，单个属性没有限制。 如果有属性是可输入的话，则用字段input_str填入属性的值。
     **/
    private $props;

    /**
        商品数量，取值范围:0-999999的整数。且需要等于Sku所有数量的和
     **/
    private $num;

    /**
        运费承担方式。运费承担方式。可选值:seller（卖家承担）,buyer(买家承担);
     **/
    private $freightPayer;

    /**
        重新关联商品与店铺类目，结构:",cid1,cid2,...,"，如果店铺类目存在二级类目，必须传入子类目cids。
     **/
    private $sellerCids;

    /**
        橱窗推荐。可选值:true,false;
     **/
    private $hasShowcase;

    /**
        上架时间。不论是更新架下的商品还是出售中的商品，如果这个字段小于当前时间则直接上架商品，并且上架的时间为更新商品的时间，此时item.is_timing为false，如果大于当前时间则宝贝会下架进入定时上架的宝贝中。
     **/
    private $listTime;

    /**
        商品新旧程度。可选值:new（全新）,unused（闲置）,second（二手）。
     **/
    private $stuffStatus;

    /**
        宝贝标题. 不能超过60字符,受违禁词控制
     **/
    private $title;

    /**
        商品价格。取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。需要在正确的价格区间内。
     **/
    private $price;

    /**
        支持会员打折。可选值:true,false;
     **/
    private $hasDiscount;

    /**
        商家编码
     **/
    private $outerId;

    /**
        宝贝所属的运费模板ID。取值范围：整数且必须是该卖家的运费模板的ID（可通过taobao.postages.get获得当前会话用户的所有邮费模板）
     **/
    private $postageId;

    /**
        商品所属的产品ID(B商家发布商品需要用)
     **/
    private $productId;

    /**
        是否在淘宝上显示
     **/
    private $isTaobao;

    /**
        是否在外店显示
     **/
    private $isEx;

    /**
        是否是3D
     **/
    private $is3D;

    /**
        商品的积分返点比例。如：5 表示返点比例0.5%. 注意：返点比例必须是>0的整数，而且最大是90,即为9%.B商家在发布非虚拟商品时，返点必须是 5的倍数，即0.5%的倍数。其它是1的倍数，即0.1%的倍数。无名良品商家发布商品时，复用该字段记录积分宝返点比例，返点必须是对应类目的返点步长的整数倍，默认是5，即0.5%。注意此时该字段值依旧必须是>0的整数，注意此时该字段值依旧必须是>0的整数，最高值不超过500，即50%
     **/
    private $auctionPoint;

    /**
        属性值别名。如pid:vid:别名;pid1:vid1:别名1， pid:属性id vid:值id。总长度不超过512字节
     **/
    private $propertyAlias;

    /**
        商品文字的版本，繁体传入”zh_HK”，简体传入”zh_CN”
     **/
    private $lang;

    /**
        商品主图需要关联的图片空间的相对url。这个url所对应的图片必须要属于当前用户。pic_path和image只需要传入一个,如果两个都传，默认选择pic_path
     **/
    private $picPath;

    /**
        是否替换sku
     **/
    private $isReplaceSku;

    /**
        商品图片。类型:JPG,GIF;最大长度:500k
     **/
    private $image;

    /**
        代充商品类型。只有少数类目下的商品可以标记上此字段，具体哪些类目可以上传可以通过taobao.itemcat.features.get获得。在代充商品的类目下，不传表示不标记商品类型（交易搜索中就不能通过标记搜到相关的交易了）。可选类型： 
no_mark(不做类型标记) 
time_card(点卡软件代充) 
fee_card(话费软件代充)
     **/
    private $autoFill;

    /**
        是否承诺退换货服务!虚拟商品无须设置此项!
     **/
    private $sellPromise;

    /**
        货到付款运费模板ID
     **/
    private $codPostageId;

    /**
        实物闪电发货。注意：在售的闪电发货产品不允许取消闪电发货，需要先下架商品才能取消闪电发货标记
     **/
    private $isLightningConsignment;

    /**
        商品的重量(商超卖家专用字段)
     **/
    private $weight;

    /**
        宝贝形态:
1代表电子券;0或其他代表实物
     **/
    private $shape;

    /**
        商品是否为新品。只有在当前类目开通新品,并且当前用户拥有该类目下发布新品权限时才能设置is_xinpin为true，否则设置true后会返回错误码:isv.invalid-permission:xinpin。同时只有一口价全新的宝贝才能设置为新品，否则会返回错误码：isv.invalid-parameter:xinpin。不设置参数就保持原有值。
     **/
    private $isXinpin;

    /**
        商品是否支持拍下减库存:1支持;2取消支持(付款减库存);0(默认)不更改 集市卖家默认拍下减库存; 商城卖家默认付款减库存
     **/
    private $subStock;

    /**
        忽略警告提示.
     **/
    private $ignorewarning;

    /**
        用户自行输入的类目属性ID串，结构："pid1,pid2,pid3"，如："20000"（表示品牌） 注：通常一个类目下用户可输入的关键属性不超过1个。
     **/
    private $inputPids;

    /**
        用户自行输入的子属性名和属性值，结构:"父属性值;一级子属性名;一级子属性值;二级子属性名;自定义输入值,....",如：“耐克;耐克系列;科比系列;科比系列;2K5,Nike乔丹鞋;乔丹系列;乔丹鞋系列;乔丹鞋系列;json5”，多个自定义属性用','分割，input_str需要与input_pids一一对应，注：通常一个类目下用户可输入的关键属性不超过1个。所有属性别名加起来不能超过3999字节。此处不可以使用“其他”、“其它”和“其她”这三个词。
     **/
    private $inputStr;

    /**
        更新的Sku的属性串，调用taobao.itemprops.get获取类目属性，如果属性是销售属性，再用taobao.itempropvalues.get取得vid。格式:pid:vid;pid:vid。该字段内的销售属性也需要在props字段填写 。如果更新时有对Sku进行操作，则Sku的properties一定要传入。
     **/
    private $skuProperties;

    /**
        更新的Sku的数量串，结构如：num1,num2,num3 如:2,3,4
     **/
    private $skuQuantities;

    /**
        更新的Sku的价格串，结构如：10.00,5.00,… 精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    private $skuPrices;

    /**
        Sku的外部id串，结构如：1234,1342,… sku_properties, sku_quantities, sku_prices, sku_outer_ids在输入数据时要一一对应，如果没有sku_outer_ids也要写上这个参数，入参是","(这个是两个sku的示列，逗号数应该是sku个数减1)；该参数最大长度是512个字节
     **/
    private $skuOuterIds;

    /**
        所在地省份。如浙江 具体可以下载http://dl.open.taobao.com/sdk/商品城市列表.rar 取到
     **/
    private $locationState;

    /**
        所在地城市。如杭州 具体可以下载http://dl.open.taobao.com/sdk/商品城市列表.rar 取到
     **/
    private $locationCity;


    public function getNumIid() : int{
        return $this->numIid;
    }

    public function setNumIid(int $numIid){
        $this->numIid = $numIid;
    }

    public function getApproveStatus() : string{
        return $this->approveStatus;
    }

    public function setApproveStatus(string $approveStatus){
        $this->approveStatus = $approveStatus;
    }

    public function getAutoRepost() : bool{
        return $this->autoRepost;
    }

    public function setAutoRepost(bool $autoRepost){
        $this->autoRepost = $autoRepost;
    }

    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getValidThru() : int{
        return $this->validThru;
    }

    public function setValidThru(int $validThru){
        $this->validThru = $validThru;
    }

    public function getPostFee() : string{
        return $this->postFee;
    }

    public function setPostFee(string $postFee){
        $this->postFee = $postFee;
    }

    public function getExpressFee() : string{
        return $this->expressFee;
    }

    public function setExpressFee(string $expressFee){
        $this->expressFee = $expressFee;
    }

    public function getEmsFee() : string{
        return $this->emsFee;
    }

    public function setEmsFee(string $emsFee){
        $this->emsFee = $emsFee;
    }

    public function getHasWarranty() : bool{
        return $this->hasWarranty;
    }

    public function setHasWarranty(bool $hasWarranty){
        $this->hasWarranty = $hasWarranty;
    }

    public function getHasInvoice() : bool{
        return $this->hasInvoice;
    }

    public function setHasInvoice(bool $hasInvoice){
        $this->hasInvoice = $hasInvoice;
    }

    public function getIncrement() : string{
        return $this->increment;
    }

    public function setIncrement(string $increment){
        $this->increment = $increment;
    }

    public function getProps() : string{
        return $this->props;
    }

    public function setProps(string $props){
        $this->props = $props;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getFreightPayer() : string{
        return $this->freightPayer;
    }

    public function setFreightPayer(string $freightPayer){
        $this->freightPayer = $freightPayer;
    }

    public function getSellerCids() : string{
        return $this->sellerCids;
    }

    public function setSellerCids(string $sellerCids){
        $this->sellerCids = $sellerCids;
    }

    public function getHasShowcase() : bool{
        return $this->hasShowcase;
    }

    public function setHasShowcase(bool $hasShowcase){
        $this->hasShowcase = $hasShowcase;
    }

    public function getListTime() : string{
        return $this->listTime;
    }

    public function setListTime(string $listTime){
        $this->listTime = $listTime;
    }

    public function getStuffStatus() : string{
        return $this->stuffStatus;
    }

    public function setStuffStatus(string $stuffStatus){
        $this->stuffStatus = $stuffStatus;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getHasDiscount() : bool{
        return $this->hasDiscount;
    }

    public function setHasDiscount(bool $hasDiscount){
        $this->hasDiscount = $hasDiscount;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getPostageId() : int{
        return $this->postageId;
    }

    public function setPostageId(int $postageId){
        $this->postageId = $postageId;
    }

    public function getProductId() : int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
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

    public function getIs3D() : bool{
        return $this->is3D;
    }

    public function setIs3D(bool $is3D){
        $this->is3D = $is3D;
    }

    public function getAuctionPoint() : int{
        return $this->auctionPoint;
    }

    public function setAuctionPoint(int $auctionPoint){
        $this->auctionPoint = $auctionPoint;
    }

    public function getPropertyAlias() : string{
        return $this->propertyAlias;
    }

    public function setPropertyAlias(string $propertyAlias){
        $this->propertyAlias = $propertyAlias;
    }

    public function getLang() : string{
        return $this->lang;
    }

    public function setLang(string $lang){
        $this->lang = $lang;
    }

    public function getPicPath() : string{
        return $this->picPath;
    }

    public function setPicPath(string $picPath){
        $this->picPath = $picPath;
    }

    public function getIsReplaceSku() : bool{
        return $this->isReplaceSku;
    }

    public function setIsReplaceSku(bool $isReplaceSku){
        $this->isReplaceSku = $isReplaceSku;
    }

    public function getImage() : string{
        return $this->image;
    }

    public function setImage(string $image){
        $this->image = $image;
    }

    public function getAutoFill() : string{
        return $this->autoFill;
    }

    public function setAutoFill(string $autoFill){
        $this->autoFill = $autoFill;
    }

    public function getSellPromise() : bool{
        return $this->sellPromise;
    }

    public function setSellPromise(bool $sellPromise){
        $this->sellPromise = $sellPromise;
    }

    public function getCodPostageId() : int{
        return $this->codPostageId;
    }

    public function setCodPostageId(int $codPostageId){
        $this->codPostageId = $codPostageId;
    }

    public function getIsLightningConsignment() : bool{
        return $this->isLightningConsignment;
    }

    public function setIsLightningConsignment(bool $isLightningConsignment){
        $this->isLightningConsignment = $isLightningConsignment;
    }

    public function getWeight() : int{
        return $this->weight;
    }

    public function setWeight(int $weight){
        $this->weight = $weight;
    }

    public function getShape() : string{
        return $this->shape;
    }

    public function setShape(string $shape){
        $this->shape = $shape;
    }

    public function getIsXinpin() : bool{
        return $this->isXinpin;
    }

    public function setIsXinpin(bool $isXinpin){
        $this->isXinpin = $isXinpin;
    }

    public function getSubStock() : int{
        return $this->subStock;
    }

    public function setSubStock(int $subStock){
        $this->subStock = $subStock;
    }

    public function getIgnorewarning() : string{
        return $this->ignorewarning;
    }

    public function setIgnorewarning(string $ignorewarning){
        $this->ignorewarning = $ignorewarning;
    }

    public function getInputPids() : array{
        return $this->inputPids;
    }

    public function setInputPids(array $inputPids){
        $this->inputPids = $inputPids;
    }

    public function getInputStr() : array{
        return $this->inputStr;
    }

    public function setInputStr(array $inputStr){
        $this->inputStr = $inputStr;
    }

    public function getSkuProperties() : string{
        return $this->skuProperties;
    }

    public function setSkuProperties(string $skuProperties){
        $this->skuProperties = $skuProperties;
    }

    public function getSkuQuantities() : string{
        return $this->skuQuantities;
    }

    public function setSkuQuantities(string $skuQuantities){
        $this->skuQuantities = $skuQuantities;
    }

    public function getSkuPrices() : string{
        return $this->skuPrices;
    }

    public function setSkuPrices(string $skuPrices){
        $this->skuPrices = $skuPrices;
    }

    public function getSkuOuterIds() : string{
        return $this->skuOuterIds;
    }

    public function setSkuOuterIds(string $skuOuterIds){
        $this->skuOuterIds = $skuOuterIds;
    }

    public function getLocationState() : string{
        return $this->locationState;
    }

    public function setLocationState(string $locationState){
        $this->locationState = $locationState;
    }

    public function getLocationCity() : string{
        return $this->locationCity;
    }

    public function setLocationCity(string $locationCity){
        $this->locationCity = $locationCity;
    }


    public function getApiName() : string {
        return "taobao.item.price.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->numIid)) {
            $requestParam["num_iid"] = TopUtil::convertBasic($this->numIid);
        }

        if (!TopUtil::checkEmpty($this->approveStatus)) {
            $requestParam["approve_status"] = TopUtil::convertBasic($this->approveStatus);
        }

        if (!TopUtil::checkEmpty($this->autoRepost)) {
            $requestParam["auto_repost"] = TopUtil::convertBasic($this->autoRepost);
        }

        if (!TopUtil::checkEmpty($this->cid)) {
            $requestParam["cid"] = TopUtil::convertBasic($this->cid);
        }

        if (!TopUtil::checkEmpty($this->desc)) {
            $requestParam["desc"] = TopUtil::convertBasic($this->desc);
        }

        if (!TopUtil::checkEmpty($this->validThru)) {
            $requestParam["valid_thru"] = TopUtil::convertBasic($this->validThru);
        }

        if (!TopUtil::checkEmpty($this->postFee)) {
            $requestParam["post_fee"] = TopUtil::convertBasic($this->postFee);
        }

        if (!TopUtil::checkEmpty($this->expressFee)) {
            $requestParam["express_fee"] = TopUtil::convertBasic($this->expressFee);
        }

        if (!TopUtil::checkEmpty($this->emsFee)) {
            $requestParam["ems_fee"] = TopUtil::convertBasic($this->emsFee);
        }

        if (!TopUtil::checkEmpty($this->hasWarranty)) {
            $requestParam["has_warranty"] = TopUtil::convertBasic($this->hasWarranty);
        }

        if (!TopUtil::checkEmpty($this->hasInvoice)) {
            $requestParam["has_invoice"] = TopUtil::convertBasic($this->hasInvoice);
        }

        if (!TopUtil::checkEmpty($this->increment)) {
            $requestParam["increment"] = TopUtil::convertBasic($this->increment);
        }

        if (!TopUtil::checkEmpty($this->props)) {
            $requestParam["props"] = TopUtil::convertBasic($this->props);
        }

        if (!TopUtil::checkEmpty($this->num)) {
            $requestParam["num"] = TopUtil::convertBasic($this->num);
        }

        if (!TopUtil::checkEmpty($this->freightPayer)) {
            $requestParam["freight_payer"] = TopUtil::convertBasic($this->freightPayer);
        }

        if (!TopUtil::checkEmpty($this->sellerCids)) {
            $requestParam["seller_cids"] = TopUtil::convertBasic($this->sellerCids);
        }

        if (!TopUtil::checkEmpty($this->hasShowcase)) {
            $requestParam["has_showcase"] = TopUtil::convertBasic($this->hasShowcase);
        }

        if (!TopUtil::checkEmpty($this->listTime)) {
            $requestParam["list_time"] = TopUtil::convertBasic($this->listTime);
        }

        if (!TopUtil::checkEmpty($this->stuffStatus)) {
            $requestParam["stuff_status"] = TopUtil::convertBasic($this->stuffStatus);
        }

        if (!TopUtil::checkEmpty($this->title)) {
            $requestParam["title"] = TopUtil::convertBasic($this->title);
        }

        if (!TopUtil::checkEmpty($this->price)) {
            $requestParam["price"] = TopUtil::convertBasic($this->price);
        }

        if (!TopUtil::checkEmpty($this->hasDiscount)) {
            $requestParam["has_discount"] = TopUtil::convertBasic($this->hasDiscount);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->postageId)) {
            $requestParam["postage_id"] = TopUtil::convertBasic($this->postageId);
        }

        if (!TopUtil::checkEmpty($this->productId)) {
            $requestParam["product_id"] = TopUtil::convertBasic($this->productId);
        }

        if (!TopUtil::checkEmpty($this->isTaobao)) {
            $requestParam["is_taobao"] = TopUtil::convertBasic($this->isTaobao);
        }

        if (!TopUtil::checkEmpty($this->isEx)) {
            $requestParam["is_ex"] = TopUtil::convertBasic($this->isEx);
        }

        if (!TopUtil::checkEmpty($this->is3D)) {
            $requestParam["is_3D"] = TopUtil::convertBasic($this->is3D);
        }

        if (!TopUtil::checkEmpty($this->auctionPoint)) {
            $requestParam["auction_point"] = TopUtil::convertBasic($this->auctionPoint);
        }

        if (!TopUtil::checkEmpty($this->propertyAlias)) {
            $requestParam["property_alias"] = TopUtil::convertBasic($this->propertyAlias);
        }

        if (!TopUtil::checkEmpty($this->lang)) {
            $requestParam["lang"] = TopUtil::convertBasic($this->lang);
        }

        if (!TopUtil::checkEmpty($this->picPath)) {
            $requestParam["pic_path"] = TopUtil::convertBasic($this->picPath);
        }

        if (!TopUtil::checkEmpty($this->isReplaceSku)) {
            $requestParam["is_replace_sku"] = TopUtil::convertBasic($this->isReplaceSku);
        }

        if (!TopUtil::checkEmpty($this->autoFill)) {
            $requestParam["auto_fill"] = TopUtil::convertBasic($this->autoFill);
        }

        if (!TopUtil::checkEmpty($this->sellPromise)) {
            $requestParam["sell_promise"] = TopUtil::convertBasic($this->sellPromise);
        }

        if (!TopUtil::checkEmpty($this->codPostageId)) {
            $requestParam["cod_postage_id"] = TopUtil::convertBasic($this->codPostageId);
        }

        if (!TopUtil::checkEmpty($this->isLightningConsignment)) {
            $requestParam["is_lightning_consignment"] = TopUtil::convertBasic($this->isLightningConsignment);
        }

        if (!TopUtil::checkEmpty($this->weight)) {
            $requestParam["weight"] = TopUtil::convertBasic($this->weight);
        }

        if (!TopUtil::checkEmpty($this->shape)) {
            $requestParam["shape"] = TopUtil::convertBasic($this->shape);
        }

        if (!TopUtil::checkEmpty($this->isXinpin)) {
            $requestParam["is_xinpin"] = TopUtil::convertBasic($this->isXinpin);
        }

        if (!TopUtil::checkEmpty($this->subStock)) {
            $requestParam["sub_stock"] = TopUtil::convertBasic($this->subStock);
        }

        if (!TopUtil::checkEmpty($this->ignorewarning)) {
            $requestParam["ignorewarning"] = TopUtil::convertBasic($this->ignorewarning);
        }

        if (!TopUtil::checkEmpty($this->inputPids)) {
            $requestParam["input_pids"] = TopUtil::convertBasicList($this->inputPids);
        }

        if (!TopUtil::checkEmpty($this->inputStr)) {
            $requestParam["input_str"] = TopUtil::convertBasicList($this->inputStr);
        }

        if (!TopUtil::checkEmpty($this->skuProperties)) {
            $requestParam["sku_properties"] = TopUtil::convertBasic($this->skuProperties);
        }

        if (!TopUtil::checkEmpty($this->skuQuantities)) {
            $requestParam["sku_quantities"] = TopUtil::convertBasic($this->skuQuantities);
        }

        if (!TopUtil::checkEmpty($this->skuPrices)) {
            $requestParam["sku_prices"] = TopUtil::convertBasic($this->skuPrices);
        }

        if (!TopUtil::checkEmpty($this->skuOuterIds)) {
            $requestParam["sku_outer_ids"] = TopUtil::convertBasic($this->skuOuterIds);
        }

        if (!TopUtil::checkEmpty($this->locationState)) {
            $requestParam["location.state"] = TopUtil::convertBasic($this->locationState);
        }

        if (!TopUtil::checkEmpty($this->locationCity)) {
            $requestParam["location.city"] = TopUtil::convertBasic($this->locationCity);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->image)){
            $fileParam["image"] = TopUtil::convertBasic($this->image);
        }
        return $fileParam;
    }

}

