<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchSetEdgeInstanceDeviceChannelRequest extends Model
{
    /**
     * @example BE0BD49EF5EF4D119D09CC1B25******
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 9c1ae7bd59f1469abbdccc9592******
     *
     * @var string
     */
    public $driverId;

    /**
     * @example 6GaTtvTj7vJhiS******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Hathoyxglj9jpYPyw3WN******
     *
     * @var string[]
     */
    public $iotIds;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'channelId'     => 'ChannelId',
        'driverId'      => 'DriverId',
        'instanceId'    => 'InstanceId',
        'iotIds'        => 'IotIds',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->iotIds) {
            $res['IotIds'] = $this->iotIds;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSetEdgeInstanceDeviceChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotIds'])) {
            if (!empty($map['IotIds'])) {
                $model->iotIds = $map['IotIds'];
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
