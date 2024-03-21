<?php
namespace Topsdk\Topapi\Ability180;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability180\Request\AlibabaProductMerchantproductEditGetRequest;
use Topsdk\Topapi\Ability180\Request\AlibabaProductMerchantproductsSearchRequest;
use Topsdk\Topapi\Ability180\Request\AlibabaProductMerchantproductPublishRequest;
use Topsdk\Topapi\Ability180\Request\AlibabaProductMerchantproductEditRequest;
use Topsdk\Topapi\Ability180\Request\AlibabaProductMerchantproductPublishGetRequest;
use Topsdk\Topapi\Ability180\Request\TmallItemSeriesItemseriesInsertorupdateRequest;
use Topsdk\Topapi\Ability180\Request\TmallItemSeriesItemseriesRemoveitemfromseriesRequest;
use Topsdk\Topapi\Ability180\Request\TmallItemSeriesItemseriesInsertseriesitemRequest;

class Ability180 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取编辑商家标准产品规则
    **/
    public function alibabaProductMerchantproductEditGet(AlibabaProductMerchantproductEditGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.product.merchantproduct.edit.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家标准产品搜索
    **/
    public function alibabaProductMerchantproductsSearch(AlibabaProductMerchantproductsSearchRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.product.merchantproducts.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        新发商家标准产品
    **/
    public function alibabaProductMerchantproductPublish(AlibabaProductMerchantproductPublishRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.product.merchantproduct.publish", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        编辑商家标准产品
    **/
    public function alibabaProductMerchantproductEdit(AlibabaProductMerchantproductEditRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.product.merchantproduct.edit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询商家标准产品新发规则
    **/
    public function alibabaProductMerchantproductPublishGet(AlibabaProductMerchantproductPublishGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.product.merchantproduct.publish.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品系列增删改接口
    **/
    public function tmallItemSeriesItemseriesInsertorupdate(TmallItemSeriesItemseriesInsertorupdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.series.itemseries.insertorupdate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        从商品系列中移除商品
    **/
    public function tmallItemSeriesItemseriesRemoveitemfromseries(TmallItemSeriesItemseriesRemoveitemfromseriesRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.series.itemseries.removeitemfromseries", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        向系列中添加系列商品
    **/
    public function tmallItemSeriesItemseriesInsertseriesitem(TmallItemSeriesItemseriesInsertseriesitemRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.series.itemseries.insertseriesitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
}