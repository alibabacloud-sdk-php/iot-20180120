<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceStateResponse\deviceStatusList;

use AlibabaCloud\Tea\Model;

class deviceStatus extends Model
{
    /**
     * @var string
     */
    public $asAddress;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $lastOnlineTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'asAddress'      => 'AsAddress',
        'deviceId'       => 'DeviceId',
        'deviceName'     => 'DeviceName',
        'iotId'          => 'IotId',
        'lastOnlineTime' => 'LastOnlineTime',
        'status'         => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('asAddress', $this->asAddress, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('lastOnlineTime', $this->lastOnlineTime, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asAddress) {
            $res['AsAddress'] = $this->asAddress;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->lastOnlineTime) {
            $res['LastOnlineTime'] = $this->lastOnlineTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsAddress'])) {
            $model->asAddress = $map['AsAddress'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['LastOnlineTime'])) {
            $model->lastOnlineTime = $map['LastOnlineTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
