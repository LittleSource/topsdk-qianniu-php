<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUserSellerGetUser {

    /**
        用户数字ID
     **/
    public $user_id;

    /**
        用户昵称
     **/
    public $nick;

    /**
        性别。可选值:m(男),f(女)
     **/
    public $sex;

    /**
        卖家信用
     **/
    public $seller_credit;

    /**
        用户类型。可选值:B(B商家),C(C商家)
     **/
    public $type;

    /**
        是否购买多图服务。可选值:true(是),false(否)
     **/
    public $has_more_pic;

    /**
        可上传商品图片数量
     **/
    public $item_img_num;

    /**
        单张商品图片最大容量(商品主图大小)。单位:k
     **/
    public $item_img_size;

    /**
        可上传属性图片数量
     **/
    public $prop_img_num;

    /**
        单张销售属性图片最大容量（非主图的商品图片和商品属性图片）。单位:k
     **/
    public $prop_img_size;

    /**
        是否受限制。可选值:limited(受限制),unlimited(不受限)
     **/
    public $auto_repost;

    /**
        有无实名认证。可选值:authentication(实名认证),not authentication(没有认证)
     **/
    public $promoted_type;

    /**
        状态。可选值:normal(正常),inactive(未激活),delete(删除),reeze(冻结),supervise(监管)
     **/
    public $status;

    /**
        有无绑定。可选值:bind(绑定),notbind(未绑定)
     **/
    public $alipay_bind;

    /**
        是否参加消保
     **/
    public $consumer_protection;

    /**
        用户的全站vip信息，可取值如下：c(普通会员),asso_vip(荣誉会员)，vip1,vip2,vip3,vip4,vip5,vip6(六个等级的正式vip会员)，共8种取值，其中asso_vip是由vip会员衰退而成，与主站上的vip0对应。
     **/
    public $vip_info;

    /**
        是否订阅了淘宝天下杂志
     **/
    public $magazine_subscribe;

    /**
        用户参与垂直市场类型。shoes表示鞋城垂直市场用户，3C表示3C垂直市场用户。多个类型之间用&quot;,&quot;分隔。如：一个用户既是3C用户又是鞋城用户，那么这个字段返回就是&quot;3C,shoes&quot;。如果用户不是垂直市场用户，此字段返回为&quot;&quot;。
     **/
    public $vertical_market;

    /**
        用户头像地址
     **/
    public $avatar;

    /**
        用户是否为网游用户，属于隐私信息，需要登陆才能查看自己的。 目前仅供taobao.user.get使用
     **/
    public $online_gaming;

    /**
        是否是无名良品用户，true or false
     **/
    public $liangpin;

    /**
        卖家是否签署食品卖家承诺协议
     **/
    public $sign_food_seller_promise;

    /**
        用户作为卖家是否开过店
     **/
    public $has_shop;

    /**
        是否24小时闪电发货(实物类)
     **/
    public $is_lightning_consignment;

    /**
        表示用户是否具备修改商品减库存逻辑的权限（一共有拍下减库存和付款减库存两种逻辑） 值含义： 1）true：是 2）false：否。
     **/
    public $has_sub_stock;

    /**
        用户是否是金牌卖家
     **/
    public $is_golden_seller;

    /**
        是否是特价版商家，需要field查询
     **/
    public $is_tjb_seller;

    /**
        用户展示昵称，不唯一，可被修改
     **/
    public $displaynick;

    /**
        openuid
     **/
    public $open_uid;


    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getSex() : string{
        return $this->sex;
    }

    public function setSex(string $sex){
        $this->sex = $sex;
    }

    public function getSellerCredit() : TaobaoUserSellerGetUserCredit{
        return $this->seller_credit;
    }

    public function setSellerCredit(TaobaoUserSellerGetUserCredit $sellerCredit){
        $this->seller_credit = $sellerCredit;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getHasMorePic() : bool{
        return $this->has_more_pic;
    }

    public function setHasMorePic(bool $hasMorePic){
        $this->has_more_pic = $hasMorePic;
    }

    public function getItemImgNum() : int{
        return $this->item_img_num;
    }

    public function setItemImgNum(int $itemImgNum){
        $this->item_img_num = $itemImgNum;
    }

    public function getItemImgSize() : int{
        return $this->item_img_size;
    }

    public function setItemImgSize(int $itemImgSize){
        $this->item_img_size = $itemImgSize;
    }

    public function getPropImgNum() : int{
        return $this->prop_img_num;
    }

    public function setPropImgNum(int $propImgNum){
        $this->prop_img_num = $propImgNum;
    }

    public function getPropImgSize() : int{
        return $this->prop_img_size;
    }

    public function setPropImgSize(int $propImgSize){
        $this->prop_img_size = $propImgSize;
    }

    public function getAutoRepost() : string{
        return $this->auto_repost;
    }

    public function setAutoRepost(string $autoRepost){
        $this->auto_repost = $autoRepost;
    }

    public function getPromotedType() : string{
        return $this->promoted_type;
    }

    public function setPromotedType(string $promotedType){
        $this->promoted_type = $promotedType;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getAlipayBind() : string{
        return $this->alipay_bind;
    }

    public function setAlipayBind(string $alipayBind){
        $this->alipay_bind = $alipayBind;
    }

    public function getConsumerProtection() : bool{
        return $this->consumer_protection;
    }

    public function setConsumerProtection(bool $consumerProtection){
        $this->consumer_protection = $consumerProtection;
    }

    public function getVipInfo() : string{
        return $this->vip_info;
    }

    public function setVipInfo(string $vipInfo){
        $this->vip_info = $vipInfo;
    }

    public function getMagazineSubscribe() : bool{
        return $this->magazine_subscribe;
    }

    public function setMagazineSubscribe(bool $magazineSubscribe){
        $this->magazine_subscribe = $magazineSubscribe;
    }

    public function getVerticalMarket() : string{
        return $this->vertical_market;
    }

    public function setVerticalMarket(string $verticalMarket){
        $this->vertical_market = $verticalMarket;
    }

    public function getAvatar() : string{
        return $this->avatar;
    }

    public function setAvatar(string $avatar){
        $this->avatar = $avatar;
    }

    public function getOnlineGaming() : bool{
        return $this->online_gaming;
    }

    public function setOnlineGaming(bool $onlineGaming){
        $this->online_gaming = $onlineGaming;
    }

    public function getLiangpin() : bool{
        return $this->liangpin;
    }

    public function setLiangpin(bool $liangpin){
        $this->liangpin = $liangpin;
    }

    public function getSignFoodSellerPromise() : bool{
        return $this->sign_food_seller_promise;
    }

    public function setSignFoodSellerPromise(bool $signFoodSellerPromise){
        $this->sign_food_seller_promise = $signFoodSellerPromise;
    }

    public function getHasShop() : bool{
        return $this->has_shop;
    }

    public function setHasShop(bool $hasShop){
        $this->has_shop = $hasShop;
    }

    public function getIsLightningConsignment() : bool{
        return $this->is_lightning_consignment;
    }

    public function setIsLightningConsignment(bool $isLightningConsignment){
        $this->is_lightning_consignment = $isLightningConsignment;
    }

    public function getHasSubStock() : bool{
        return $this->has_sub_stock;
    }

    public function setHasSubStock(bool $hasSubStock){
        $this->has_sub_stock = $hasSubStock;
    }

    public function getIsGoldenSeller() : bool{
        return $this->is_golden_seller;
    }

    public function setIsGoldenSeller(bool $isGoldenSeller){
        $this->is_golden_seller = $isGoldenSeller;
    }

    public function getIsTjbSeller() : bool{
        return $this->is_tjb_seller;
    }

    public function setIsTjbSeller(bool $isTjbSeller){
        $this->is_tjb_seller = $isTjbSeller;
    }

    public function getDisplaynick() : string{
        return $this->displaynick;
    }

    public function setDisplaynick(string $displaynick){
        $this->displaynick = $displaynick;
    }

    public function getOpenUid() : string{
        return $this->open_uid;
    }

    public function setOpenUid(string $openUid){
        $this->open_uid = $openUid;
    }


}

