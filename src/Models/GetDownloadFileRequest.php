<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetDownloadFileRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $context;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $longJobId;
    protected $_name = [
        'context'       => 'Context',
        'iotInstanceId' => 'IotInstanceId',
        'longJobId'     => 'LongJobId',
    ];

    public function validate()
    {
        Model::validateRequired('longJobId', $this->longJobId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->longJobId) {
            $res['LongJobId'] = $this->longJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDownloadFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['LongJobId'])) {
            $model->longJobId = $map['LongJobId'];
        }

        return $model;
    }
}
