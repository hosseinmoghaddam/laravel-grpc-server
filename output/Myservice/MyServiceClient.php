<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Myservice;

/**
 */
class MyServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Myservice\UserInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserInfo(\Myservice\UserInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/myservice.MyService/GetUserInfo',
        $argument,
        ['\Myservice\UserInfoResponse', 'decode'],
        $metadata, $options);
    }

}
