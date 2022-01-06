<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QuerySubscribeRelationResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $consumerGroupIds;

    /**
     * @var bool
     */
    public $deviceDataFlag;

    /**
     * @var bool
     */
    public $deviceLifeCycleFlag;

    /**
     * @var bool
     */
    public $deviceStatusChangeFlag;

    /**
     * @var bool
     */
    public $deviceTagFlag;

    /**
     * @var bool
     */
    public $deviceTopoLifeCycleFlag;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $foundDeviceListFlag;

    /**
     * @var string
     */
    public $mnsConfiguration;

    /**
     * @var bool
     */
    public $otaEventFlag;

    /**
     * @var bool
     */
    public $otaJobFlag;

    /**
     * @var bool
     */
    public $otaVersionFlag;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var bool
     */
    public $thingHistoryFlag;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'code'                    => 'Code',
        'consumerGroupIds'        => 'ConsumerGroupIds',
        'deviceDataFlag'          => 'DeviceDataFlag',
        'deviceLifeCycleFlag'     => 'DeviceLifeCycleFlag',
        'deviceStatusChangeFlag'  => 'DeviceStatusChangeFlag',
        'deviceTagFlag'           => 'DeviceTagFlag',
        'deviceTopoLifeCycleFlag' => 'DeviceTopoLifeCycleFlag',
        'errorMessage'            => 'ErrorMessage',
        'foundDeviceListFlag'     => 'FoundDeviceListFlag',
        'mnsConfiguration'        => 'MnsConfiguration',
        'otaEventFlag'            => 'OtaEventFlag',
        'otaJobFlag'              => 'OtaJobFlag',
        'otaVersionFlag'          => 'OtaVersionFlag',
        'productKey'              => 'ProductKey',
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
        'thingHistoryFlag'        => 'ThingHistoryFlag',
        'type'                    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->consumerGroupIds) {
            $res['ConsumerGroupIds'] = $this->consumerGroupIds;
        }
        if (null !== $this->deviceDataFlag) {
            $res['DeviceDataFlag'] = $this->deviceDataFlag;
        }
        if (null !== $this->deviceLifeCycleFlag) {
            $res['DeviceLifeCycleFlag'] = $this->deviceLifeCycleFlag;
        }
        if (null !== $this->deviceStatusChangeFlag) {
            $res['DeviceStatusChangeFlag'] = $this->deviceStatusChangeFlag;
        }
        if (null !== $this->deviceTagFlag) {
            $res['DeviceTagFlag'] = $this->deviceTagFlag;
        }
        if (null !== $this->deviceTopoLifeCycleFlag) {
            $res['DeviceTopoLifeCycleFlag'] = $this->deviceTopoLifeCycleFlag;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->foundDeviceListFlag) {
            $res['FoundDeviceListFlag'] = $this->foundDeviceListFlag;
        }
        if (null !== $this->mnsConfiguration) {
            $res['MnsConfiguration'] = $this->mnsConfiguration;
        }
        if (null !== $this->otaEventFlag) {
            $res['OtaEventFlag'] = $this->otaEventFlag;
        }
        if (null !== $this->otaJobFlag) {
            $res['OtaJobFlag'] = $this->otaJobFlag;
        }
        if (null !== $this->otaVersionFlag) {
            $res['OtaVersionFlag'] = $this->otaVersionFlag;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->thingHistoryFlag) {
            $res['ThingHistoryFlag'] = $this->thingHistoryFlag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySubscribeRelationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsumerGroupIds'])) {
            if (!empty($map['ConsumerGroupIds'])) {
                $model->consumerGroupIds = $map['ConsumerGroupIds'];
            }
        }
        if (isset($map['DeviceDataFlag'])) {
            $model->deviceDataFlag = $map['DeviceDataFlag'];
        }
        if (isset($map['DeviceLifeCycleFlag'])) {
            $model->deviceLifeCycleFlag = $map['DeviceLifeCycleFlag'];
        }
        if (isset($map['DeviceStatusChangeFlag'])) {
            $model->deviceStatusChangeFlag = $map['DeviceStatusChangeFlag'];
        }
        if (isset($map['DeviceTagFlag'])) {
            $model->deviceTagFlag = $map['DeviceTagFlag'];
        }
        if (isset($map['DeviceTopoLifeCycleFlag'])) {
            $model->deviceTopoLifeCycleFlag = $map['DeviceTopoLifeCycleFlag'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FoundDeviceListFlag'])) {
            $model->foundDeviceListFlag = $map['FoundDeviceListFlag'];
        }
        if (isset($map['MnsConfiguration'])) {
            $model->mnsConfiguration = $map['MnsConfiguration'];
        }
        if (isset($map['OtaEventFlag'])) {
            $model->otaEventFlag = $map['OtaEventFlag'];
        }
        if (isset($map['OtaJobFlag'])) {
            $model->otaJobFlag = $map['OtaJobFlag'];
        }
        if (isset($map['OtaVersionFlag'])) {
            $model->otaVersionFlag = $map['OtaVersionFlag'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ThingHistoryFlag'])) {
            $model->thingHistoryFlag = $map['ThingHistoryFlag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
