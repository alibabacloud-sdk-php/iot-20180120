<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateLoRaNodesTaskRequest\deviceInfo;
use AlibabaCloud\Tea\Model;

class CreateLoRaNodesTaskRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var deviceInfo[]
     */
    public $deviceInfo;
    protected $_name = [
        'apiProduct'    => 'ApiProduct',
        'apiRevision'   => 'ApiRevision',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'deviceInfo'    => 'DeviceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = [];
            if (null !== $this->deviceInfo && \is_array($this->deviceInfo)) {
                $n = 0;
                foreach ($this->deviceInfo as $item) {
                    $res['DeviceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoRaNodesTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceInfo'])) {
            if (!empty($map['DeviceInfo'])) {
                $model->deviceInfo = [];
                $n                 = 0;
                foreach ($map['DeviceInfo'] as $item) {
                    $model->deviceInfo[$n++] = null !== $item ? deviceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
