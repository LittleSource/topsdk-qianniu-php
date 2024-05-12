<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersPageRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterUserPermissionsGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditFastupdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemsOnsaleGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkuGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoAppstoreSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkusGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubuserPermissionsRolesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterRolesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoShopcatsListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercatsListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercatsListAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercatsListUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterRoleAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoShopUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaUserinfoUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasOrderSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFuwuScoresGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUserSellerGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaDistributorOrderQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemcatsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaOrderDistributeRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureCategoryGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFuwuSaleLinkGenRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureUploadRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersInfoQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureCategoryUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaDistributorRoleGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureReplaceRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaDistributorBindRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaDistributorBindRelaQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemcatsAuthorizeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemsInventoryGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureUserinfoGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSkusCustomGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureIsreferencedGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaDistributorOrderCancelRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserFullinfoGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemPublishSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserDepartmentsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallItemPriceUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserDutysGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserInfoUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemPublishSubmitRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditSubmitRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemOperateDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemOperateDownshelfRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemOperateUpshelfRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemPublishPropsGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemPublishMarketGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductAddSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductMatchSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductSchemaMatchRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductSchemaAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcMessageProduceRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureCategoryAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserCancelRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserPermitRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersPageRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPicturePicturesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPicturePicturesCountRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaSupplierRoleGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaSupplierBindRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaSupplierOrderQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoDaifaSupplierOrderConsignRequest;

class Defaultability
{

    public $client;

    public function __construct(TopApiClient $client)
    {
        $this->client = $client;
    }


    /**
        查询指定账户的子账号列表
    **/
    public function taobaoSellercenterSubusersGet(TaobaoSellercenterSubusersGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        分页获取指定账户的子账号简易信息列表（新isv建议使用taobao.sellercenter.subusers.page接口）
    **/
    public function taobaoSubusersPage(TaobaoSubusersPageRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定用户的权限集合
    **/
    public function taobaoSellercenterUserPermissionsGet(TaobaoSellercenterUserPermissionsGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.sellercenter.user.permissions.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品编辑增量更新
    **/
    public function alibabaItemEditFastupdate(AlibabaItemEditFastupdateRequest $request, string $session)
    {
        return $this->client->executeWithSession("alibaba.item.edit.fastupdate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取当前会话用户出售中的商品列表
    **/
    public function taobaoItemsOnsaleGet(TaobaoItemsOnsaleGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.items.onsale.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商家所在分组及其已授权(广播)消息topics
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request)
    {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取SKU
    **/
    public function taobaoItemSkuGet(TaobaoItemSkuGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.item.sku.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询appstore应用订购关系
    **/
    public function taobaoAppstoreSubscribeGet(TaobaoAppstoreSubscribeGetRequest $request)
    {
        return $this->client->execute("taobao.appstore.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        根据商品ID列表获取SKU信息
    **/
    public function taobaoItemSkusGet(TaobaoItemSkusGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.item.skus.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询指定的子账号的权限和角色信息
    **/
    public function taobaoSellercenterSubuserPermissionsRolesGet(TaobaoSellercenterSubuserPermissionsRolesGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.sellercenter.subuser.permissions.roles.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定卖家的角色列表
    **/
    public function taobaoSellercenterRolesGet(TaobaoSellercenterRolesGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.sellercenter.roles.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取前台展示的店铺类目
    **/
    public function taobaoShopcatsListGet(TaobaoShopcatsListGetRequest $request)
    {
        return $this->client->execute("taobao.shopcats.list.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取前台展示的店铺内卖家自定义商品类目
    **/
    public function taobaoSellercatsListGet(TaobaoSellercatsListGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.sellercats.list.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        添加卖家自定义类目
    **/
    public function taobaoSellercatsListAdd(TaobaoSellercatsListAddRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.sellercats.list.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新卖家自定义类目
    **/
    public function taobaoSellercatsListUpdate(TaobaoSellercatsListUpdateRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.sellercats.list.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        子账号角色的新增（指定卖家）
    **/
    public function taobaoSellercenterRoleAdd(TaobaoSellercenterRoleAddRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.sellercenter.role.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新店铺基本信息
    **/
    public function taobaoShopUpdate(TaobaoShopUpdateRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.shop.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        代发修改用户入驻信息
    **/
    public function taobaoDaifaUserinfoUpdate(TaobaoDaifaUserinfoUpdateRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.daifa.userinfo.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        订购关系查询
    **/
    public function taobaoVasSubscribeGet(TaobaoVasSubscribeGetRequest $request)
    {
        return $this->client->execute("taobao.vas.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订单记录导出
    **/
    public function taobaoVasOrderSearch(TaobaoVasOrderSearchRequest $request)
    {
        return $this->client->execute("taobao.vas.order.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订购记录导出
    **/
    public function taobaoVasSubscSearch(TaobaoVasSubscSearchRequest $request)
    {
        return $this->client->execute("taobao.vas.subsc.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        服务平台评价查询接口
    **/
    public function taobaoFuwuScoresGet(TaobaoFuwuScoresGetRequest $request)
    {
        return $this->client->execute("taobao.fuwu.scores.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        查询卖家用户信息
    **/
    public function taobaoUserSellerGet(TaobaoUserSellerGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.user.seller.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        代发管理-分销商订单查询接口
    **/
    public function taobaoDaifaDistributorOrderQuery(TaobaoDaifaDistributorOrderQueryRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.daifa.distributor.order.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取后台供卖家发布商品的标准商品类目
    **/
    public function taobaoItemcatsGet(TaobaoItemcatsGetRequest $request)
    {
        return $this->client->execute("taobao.itemcats.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        代发管理-分销商分单接口
    **/
    public function taobaoDaifaOrderDistribute(TaobaoDaifaOrderDistributeRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.daifa.order.distribute", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取图片分类信息
    **/
    public function taobaoPictureCategoryGet(TaobaoPictureCategoryGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.category.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务平台营销链接生成接口
    **/
    public function taobaoFuwuSaleLinkGen(TaobaoFuwuSaleLinkGenRequest $request)
    {
        return $this->client->execute("taobao.fuwu.sale.link.gen", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取图片信息
    **/
    public function taobaoPictureGet(TaobaoPictureGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        上传单张图片
    **/
    public function taobaoPictureUpload(TaobaoPictureUploadRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据当前子账号登陆态，获取该子账号基本信息
    **/
    public function taobaoSubusersInfoQuery(TaobaoSubusersInfoQueryRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.subusers.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新图片分类
    **/
    public function taobaoPictureCategoryUpdate(TaobaoPictureCategoryUpdateRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.category.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        代发管理分销商、供应商身份获取接口
    **/
    public function taobaoDaifaDistributorRoleGet(TaobaoDaifaDistributorRoleGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.daifa.distributor.role.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        替换图片
    **/
    public function taobaoPictureReplace(TaobaoPictureReplaceRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.replace", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        代发管理-分销商、供货商关系绑定
    **/
    public function taobaoDaifaDistributorBind(TaobaoDaifaDistributorBindRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.daifa.distributor.bind", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        代发管理分销商、供货商绑定关系查询
    **/
    public function taobaoDaifaDistributorBindRelaQuery(TaobaoDaifaDistributorBindRelaQueryRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.daifa.distributor.bind.rela.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改图片名字
    **/
    public function taobaoPictureUpdate(TaobaoPictureUpdateRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询商家被授权品牌列表和类目列表
    **/
    public function taobaoItemcatsAuthorizeGet(TaobaoItemcatsAuthorizeGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.itemcats.authorize.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        得到当前会话用户库存中的商品列表
    **/
    public function taobaoItemsInventoryGet(TaobaoItemsInventoryGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.items.inventory.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询图片空间用户的信息
    **/
    public function taobaoPictureUserinfoGet(TaobaoPictureUserinfoGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.userinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据外部ID取商品SKU
    **/
    public function taobaoSkusCustomGet(TaobaoSkusCustomGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.skus.custom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        图片是否被引用
    **/
    public function taobaoPictureIsreferencedGet(TaobaoPictureIsreferencedGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.isreferenced.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的子账号简易信息列表
    **/
    public function taobaoSubusersGet(TaobaoSubusersGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        分销商取消分单接口
    **/
    public function taobaoDaifaDistributorOrderCancel(TaobaoDaifaDistributorOrderCancelRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.daifa.distributor.order.cancel", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户子账号的详细信息
    **/
    public function taobaoSubuserFullinfoGet(TaobaoSubuserFullinfoGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.subuser.fullinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商品发布规则信息
    **/
    public function alibabaItemPublishSchemaGet(AlibabaItemPublishSchemaGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("alibaba.item.publish.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的所有部门列表
    **/
    public function taobaoSubuserDepartmentsGet(TaobaoSubuserDepartmentsGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.subuser.departments.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        天猫商品/SKU价格更新接口
    **/
    public function tmallItemPriceUpdate(TmallItemPriceUpdateRequest $request, string $session)
    {
        return $this->client->executeWithSession("tmall.item.price.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的所有职务信息列表
    **/
    public function taobaoSubuserDutysGet(TaobaoSubuserDutysGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.subuser.dutys.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改指定账户子账号的基本信息
    **/
    public function taobaoSubuserInfoUpdate(TaobaoSubuserInfoUpdateRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.subuser.info.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品发布
    **/
    public function alibabaItemPublishSubmit(AlibabaItemPublishSubmitRequest $request, string $session)
    {
        return $this->client->executeWithSession("alibaba.item.publish.submit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品编辑获取schema信息
    **/
    public function alibabaItemEditSchemaGet(AlibabaItemEditSchemaGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("alibaba.item.edit.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品编辑提交schema信息
    **/
    public function alibabaItemEditSubmit(AlibabaItemEditSubmitRequest $request, string $session)
    {
        return $this->client->executeWithSession("alibaba.item.edit.submit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品删除
    **/
    public function alibabaItemOperateDelete(AlibabaItemOperateDeleteRequest $request, string $session)
    {
        return $this->client->executeWithSession("alibaba.item.operate.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品下架
    **/
    public function alibabaItemOperateDownshelf(AlibabaItemOperateDownshelfRequest $request, string $session)
    {
        return $this->client->executeWithSession("alibaba.item.operate.downshelf", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品上架
    **/
    public function alibabaItemOperateUpshelf(AlibabaItemOperateUpshelfRequest $request, string $session)
    {
        return $this->client->executeWithSession("alibaba.item.operate.upshelf", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品级联属性信息获取
    **/
    public function alibabaItemPublishPropsGet(AlibabaItemPublishPropsGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("alibaba.item.publish.props.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商家可发布商品的市场信息
    **/
    public function alibabaItemPublishMarketGet(AlibabaItemPublishMarketGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("alibaba.item.publish.market.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        产品发布规则获取接口
    **/
    public function tmallProductAddSchemaGet(TmallProductAddSchemaGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("tmall.product.add.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取匹配产品规则
    **/
    public function tmallProductMatchSchemaGet(TmallProductMatchSchemaGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("tmall.product.match.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        product匹配接口
    **/
    public function tmallProductSchemaMatch(TmallProductSchemaMatchRequest $request, string $session)
    {
        return $this->client->executeWithSession("tmall.product.schema.match", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        使用Schema文件发布一个产品
    **/
    public function tmallProductSchemaAdd(TmallProductSchemaAddRequest $request, string $session)
    {
        return $this->client->executeWithSession("tmall.product.schema.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发布单条消息
    **/
    public function taobaoTmcMessageProduce(TaobaoTmcMessageProduceRequest $request)
    {
        return $this->client->execute("taobao.tmc.message.produce", $request->toMap(), $request->toFileParamMap());
    }
    /**
        新增图片分类信息
    **/
    public function taobaoPictureCategoryAdd(TaobaoPictureCategoryAddRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.category.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        取消用户的消息服务
    **/
    public function taobaoTmcUserCancel(TaobaoTmcUserCancelRequest $request)
    {
        return $this->client->execute("taobao.tmc.user.cancel", $request->toMap(), $request->toFileParamMap());
    }
    /**
        为已授权的用户开通消息服务
    **/
    public function taobaoTmcUserPermit(TaobaoTmcUserPermitRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.tmc.user.permit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过主账号登陆态分页查询子账号列表
    **/
    public function taobaoSellercenterSubusersPage(TaobaoSellercenterSubusersPageRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        图片获取
    **/
    public function taobaoPicturePicturesGet(TaobaoPicturePicturesGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.pictures.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        图片总数查询
    **/
    public function taobaoPicturePicturesCount(TaobaoPicturePicturesCountRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.picture.pictures.count", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        代发管理供货商身份获取接口
    **/
    public function taobaoDaifaSupplierRoleGet(TaobaoDaifaSupplierRoleGetRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.daifa.supplier.role.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        代发管理-分销商、供货商关系绑定接口
    **/
    public function taobaoDaifaSupplierBind(TaobaoDaifaSupplierBindRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.daifa.supplier.bind", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        代发管理-供货商订单查询接口
    **/
    public function taobaoDaifaSupplierOrderQuery(TaobaoDaifaSupplierOrderQueryRequest $request, string $session)
    {
        return $this->client->executeWithSession("taobao.daifa.supplier.order.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        代发管理-供货商单据发货接口
    **/
    public function taobaoDaifaSupplierOrderConsign(TaobaoDaifaSupplierOrderConsignRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.daifa.supplier.order.consign", $request->toMap(), $request->toFileParamMap(), $session);
    }
}
