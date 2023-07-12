<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteShareTaskDeviceRequest extends Model
{
    /**
     * @var string[]
     */
    public $iotIdList;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $shareTaskId;
    protected $_name = [
        'iotIdList'     => 'IotIdList',
        'iotInstanceId' => 'IotInstanceId',
        'shareTaskId'   => 'ShareTaskId',
    ];

    public function validate()
    {
        Model::validateRequired('shareTaskId', $this->shareTaskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotIdList) {
            $res['IotIdList'] = $this->iotIdList;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->shareTaskId) {
            $res['ShareTaskId'] = $this->shareTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteShareTaskDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotIdList'])) {
            if (!empty($map['IotIdList'])) {
                $model->iotIdList = $map['IotIdList'];
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ShareTaskId'])) {
            $model->shareTaskId = $map['ShareTaskId'];
        }

        return $model;
    }
}
