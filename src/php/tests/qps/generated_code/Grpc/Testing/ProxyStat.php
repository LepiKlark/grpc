<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/proxy-service.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>grpc.testing.ProxyStat</code>
 */
class ProxyStat extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>double latency = 1;</code>
     */
    private $latency = 0.0;

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Testing\ProxyService::initOnce();
        parent::__construct();
    }

    /**
     * <code>double latency = 1;</code>
     */
    public function getLatency()
    {
        return $this->latency;
    }

    /**
     * <code>double latency = 1;</code>
     */
    public function setLatency($var)
    {
        GPBUtil::checkDouble($var);
        $this->latency = $var;
    }

}

