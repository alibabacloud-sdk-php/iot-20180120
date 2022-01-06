<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceChannelResponseBody\deviceChannelList;
use AlibabaCloud\Tea\Model;

class BatchGetEdgeInstanceDeviceChannelResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var deviceChannelList[]
     */
    public $deviceChannelList;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'              => 'Code',
        'deviceChannelList' => 'DeviceChannelList',
        'errorMessage'      => 'ErrorMessage',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
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
        if (null !== $this->deviceChannelList) {
            $res['DeviceChannelList'] = [];
            if (null !== $this->deviceChannelList && \is_array($this->deviceChannelList)) {
                $n = 0;
                foreach ($this->deviceChannelList as $item) {
                    $res['DeviceChannelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetEdgeInstanceDeviceChannelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DeviceChannelList'])) {
            if (!empty($map['DeviceChannelList'])) {
                $model->deviceChannelList = [];
                $n                        = 0;
                foreach ($map['DeviceChannelList'] as $item) {
                    $model->deviceChannelList[$n++] = null !== $item ? deviceChannelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
