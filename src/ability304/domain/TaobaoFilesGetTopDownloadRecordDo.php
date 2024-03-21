<?php
namespace Topsdk\Topapi\Ability304\Domain;

class TaobaoFilesGetTopDownloadRecordDo {

    /**
        下载链接
     **/
    public $url;

    /**
        文件创建时间
     **/
    public $created;

    /**
        下载链接状态。1:未下载。2:已下载
     **/
    public $status;


    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

