<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateTopicRouteTableRequest extends Model
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
     * @var string[]
     */
    public $dstTopic;

    /**
     * @var string
     */
    public $srcTopic;
    protected $_name = [
        'apiProduct'    => 'ApiProduct',
        'apiRevision'   => 'ApiRevision',
        'iotInstanceId' => 'IotInstanceId',
        'dstTopic'      => 'DstTopic',
        'srcTopic'      => 'SrcTopic',
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
        if (null !== $this->dstTopic) {
            $res['DstTopic'] = $this->dstTopic;
        }
        if (null !== $this->srcTopic) {
            $res['SrcTopic'] = $this->srcTopic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTopicRouteTableRequest
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
        if (isset($map['DstTopic'])) {
            if (!empty($map['DstTopic'])) {
                $model->dstTopic = $map['DstTopic'];
            }
        }
        if (isset($map['SrcTopic'])) {
            $model->srcTopic = $map['SrcTopic'];
        }

        return $model;
    }
}
