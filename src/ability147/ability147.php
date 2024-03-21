<?php
namespace Topsdk\Topapi\Ability147;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability147\Request\TmallProductSchemaGetRequest;
use Topsdk\Topapi\Ability147\Request\TmallProductUpdateSchemaGetRequest;
use Topsdk\Topapi\Ability147\Request\TmallProductSchemaUpdateRequest;
use Topsdk\Topapi\Ability147\Request\TmallItemCalculateHscodeGetRequest;
use Topsdk\Topapi\Ability147\Request\TmallItemHscodeAuditResultsQueryRequest;
use Topsdk\Topapi\Ability147\Request\TmallItemHscodeDetailGetRequest;

class Ability147 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        产品信息获取schema获取
    **/
    public function tmallProductSchemaGet(TmallProductSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        产品更新规则获取接口
    **/
    public function tmallProductUpdateSchemaGet(TmallProductUpdateSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.update.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        产品更新接口
    **/
    public function tmallProductSchemaUpdate(TmallProductSchemaUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.schema.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        算法获取hscode
    **/
    public function tmallItemCalculateHscodeGet(TmallItemCalculateHscodeGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.calculate.hscode.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品hscode信息审核状态查询接口
    **/
    public function tmallItemHscodeAuditResultsQuery(TmallItemHscodeAuditResultsQueryRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.hscode.audit.results.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过hscode获取计量单位
    **/
    public function tmallItemHscodeDetailGet(TmallItemHscodeDetailGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.hscode.detail.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}