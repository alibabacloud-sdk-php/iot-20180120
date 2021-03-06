<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceDriverResponseBody\deviceDriverList;
use AlibabaCloud\Tea\Model;

class BatchGetEdgeInstanceDeviceDriverResponseBody extends Model
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
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var deviceDriverList[]
     */
    public $deviceDriverList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'code'             => 'Code',
        'errorMessage'     => 'ErrorMessage',
        'deviceDriverList' => 'DeviceDriverList',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->deviceDriverList) {
            $res['DeviceDriverList'] = [];
            if (null !== $this->deviceDriverList && \is_array($this->deviceDriverList)) {
                $n = 0;
                foreach ($this->deviceDriverList as $item) {
                    $res['DeviceDriverList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetEdgeInstanceDeviceDriverResponseBody
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['DeviceDriverList'])) {
            if (!empty($map['DeviceDriverList'])) {
                $model->deviceDriverList = [];
                $n                       = 0;
                foreach ($map['DeviceDriverList'] as $item) {
                    $model->deviceDriverList[$n++] = null !== $item ? deviceDriverList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
