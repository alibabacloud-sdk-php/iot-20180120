<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UnbindSceneRuleFromEdgeInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'instanceId'    => 'InstanceId',
        'ruleId'        => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindSceneRuleFromEdgeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
