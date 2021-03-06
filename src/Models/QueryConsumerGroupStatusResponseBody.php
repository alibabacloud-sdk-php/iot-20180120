<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponseBody\clientConnectionStatusList;
use AlibabaCloud\Tea\Model;

class QueryConsumerGroupStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $accumulationCount;

    /**
     * @var int
     */
    public $consumerSpeed;

    /**
     * @var string
     */
    public $lastConsumerTime;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $accumulatedConsumeCountPerMinute;

    /**
     * @var int
     */
    public $realTimeConsumeCountPerMinute;

    /**
     * @var clientConnectionStatusList
     */
    public $clientConnectionStatusList;
    protected $_name = [
        'requestId'                        => 'RequestId',
        'success'                          => 'Success',
        'errorMessage'                     => 'ErrorMessage',
        'accumulationCount'                => 'AccumulationCount',
        'consumerSpeed'                    => 'ConsumerSpeed',
        'lastConsumerTime'                 => 'LastConsumerTime',
        'code'                             => 'Code',
        'accumulatedConsumeCountPerMinute' => 'AccumulatedConsumeCountPerMinute',
        'realTimeConsumeCountPerMinute'    => 'RealTimeConsumeCountPerMinute',
        'clientConnectionStatusList'       => 'ClientConnectionStatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->accumulationCount) {
            $res['AccumulationCount'] = $this->accumulationCount;
        }
        if (null !== $this->consumerSpeed) {
            $res['ConsumerSpeed'] = $this->consumerSpeed;
        }
        if (null !== $this->lastConsumerTime) {
            $res['LastConsumerTime'] = $this->lastConsumerTime;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->accumulatedConsumeCountPerMinute) {
            $res['AccumulatedConsumeCountPerMinute'] = $this->accumulatedConsumeCountPerMinute;
        }
        if (null !== $this->realTimeConsumeCountPerMinute) {
            $res['RealTimeConsumeCountPerMinute'] = $this->realTimeConsumeCountPerMinute;
        }
        if (null !== $this->clientConnectionStatusList) {
            $res['ClientConnectionStatusList'] = null !== $this->clientConnectionStatusList ? $this->clientConnectionStatusList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConsumerGroupStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['AccumulationCount'])) {
            $model->accumulationCount = $map['AccumulationCount'];
        }
        if (isset($map['ConsumerSpeed'])) {
            $model->consumerSpeed = $map['ConsumerSpeed'];
        }
        if (isset($map['LastConsumerTime'])) {
            $model->lastConsumerTime = $map['LastConsumerTime'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['AccumulatedConsumeCountPerMinute'])) {
            $model->accumulatedConsumeCountPerMinute = $map['AccumulatedConsumeCountPerMinute'];
        }
        if (isset($map['RealTimeConsumeCountPerMinute'])) {
            $model->realTimeConsumeCountPerMinute = $map['RealTimeConsumeCountPerMinute'];
        }
        if (isset($map['ClientConnectionStatusList'])) {
            $model->clientConnectionStatusList = clientConnectionStatusList::fromMap($map['ClientConnectionStatusList']);
        }

        return $model;
    }
}
