<?php
namespace shanhubei\gpush\request;
use shanhubei\gpush\request\GTApiRequest;
class GTApiRequest{

    //api参数集合
    protected $apiParam = array();

    public function getApiParam()
    {
        return $this->apiParam;
    }
}
