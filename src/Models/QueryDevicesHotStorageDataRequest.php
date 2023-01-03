<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDevicesHotStorageDataRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $asc;

    /**
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 1579249499000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example temperature
     *
     * @var string
     */
    public $identifier;

    /**
     * @example y4u2weAI********HMle1234
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot-2w****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example Bo***x44Qx
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 1579249499000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example user/a***\/b***
     *
     * @var string
     */
    public $userTopic;
    protected $_name = [
        'asc'           => 'Asc',
        'deviceName'    => 'DeviceName',
        'endTime'       => 'EndTime',
        'identifier'    => 'Identifier',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'nextPageToken' => 'NextPageToken',
        'pageSize'      => 'PageSize',
        'productKey'    => 'ProductKey',
        'startTime'     => 'StartTime',
        'userTopic'     => 'UserTopic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asc) {
            $res['Asc'] = $this->asc;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->userTopic) {
            $res['UserTopic'] = $this->userTopic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDevicesHotStorageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asc'])) {
            $model->asc = $map['Asc'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UserTopic'])) {
            $model->userTopic = $map['UserTopic'];
        }

        return $model;
    }
}
