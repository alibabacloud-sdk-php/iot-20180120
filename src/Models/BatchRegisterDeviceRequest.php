<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchRegisterDeviceRequest extends Model
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
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $realTenantId;

    /**
     * @var string
     */
    public $realTripartiteKey;
    protected $_name = [
        'apiProduct'        => 'ApiProduct',
        'apiRevision'       => 'ApiRevision',
        'iotInstanceId'     => 'IotInstanceId',
        'productKey'        => 'ProductKey',
        'count'             => 'Count',
        'realTenantId'      => 'RealTenantId',
        'realTripartiteKey' => 'RealTripartiteKey',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->realTenantId) {
            $res['RealTenantId'] = $this->realTenantId;
        }
        if (null !== $this->realTripartiteKey) {
            $res['RealTripartiteKey'] = $this->realTripartiteKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchRegisterDeviceRequest
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RealTenantId'])) {
            $model->realTenantId = $map['RealTenantId'];
        }
        if (isset($map['RealTripartiteKey'])) {
            $model->realTripartiteKey = $map['RealTripartiteKey'];
        }

        return $model;
    }
}
