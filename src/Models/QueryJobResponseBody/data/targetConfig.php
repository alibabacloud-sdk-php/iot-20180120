<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data\targetConfig\targetDevices;
use AlibabaCloud\Tea\Model;

class targetConfig extends Model
{
    /**
     * @var targetDevices
     */
    public $targetDevices;

    /**
     * @var string
     */
    public $targetGroup;

    /**
     * @var string
     */
    public $targetProduct;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'targetDevices' => 'TargetDevices',
        'targetGroup'   => 'TargetGroup',
        'targetProduct' => 'TargetProduct',
        'targetType'    => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetDevices) {
            $res['TargetDevices'] = null !== $this->targetDevices ? $this->targetDevices->toMap() : null;
        }
        if (null !== $this->targetGroup) {
            $res['TargetGroup'] = $this->targetGroup;
        }
        if (null !== $this->targetProduct) {
            $res['TargetProduct'] = $this->targetProduct;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetDevices'])) {
            $model->targetDevices = targetDevices::fromMap($map['TargetDevices']);
        }
        if (isset($map['TargetGroup'])) {
            $model->targetGroup = $map['TargetGroup'];
        }
        if (isset($map['TargetProduct'])) {
            $model->targetProduct = $map['TargetProduct'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
