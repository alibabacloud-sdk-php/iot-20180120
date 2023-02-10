<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsResponse\ruleActionList;

use AlibabaCloud\Tea\Model;

class ruleActionInfo extends Model
{
    /**
     * @var string
     */
    public $configuration;

    /**
     * @var bool
     */
    public $errorActionFlag;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'configuration'   => 'Configuration',
        'errorActionFlag' => 'ErrorActionFlag',
        'id'              => 'Id',
        'ruleId'          => 'RuleId',
        'status'          => 'Status',
        'type'            => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('configuration', $this->configuration, true);
        Model::validateRequired('errorActionFlag', $this->errorActionFlag, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->errorActionFlag) {
            $res['ErrorActionFlag'] = $this->errorActionFlag;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleActionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['ErrorActionFlag'])) {
            $model->errorActionFlag = $map['ErrorActionFlag'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}