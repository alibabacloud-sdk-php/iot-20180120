<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDetailSceneRuleLogResponseBody\data;

use AlibabaCloud\Tea\Model;

class logList extends Model
{
    /**
     * @example 9201
     *
     * @var string
     */
    public $code;

    /**
     * @example device offline, productKey: a1c3t****, deviceName: my_device1
     *
     * @var string
     */
    public $message;

    /**
     * @example a1c3t****\/my_device1
     *
     * @var string
     */
    public $pkDn;
    protected $_name = [
        'code'    => 'Code',
        'message' => 'Message',
        'pkDn'    => 'PkDn',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pkDn) {
            $res['PkDn'] = $this->pkDn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PkDn'])) {
            $model->pkDn = $map['PkDn'];
        }

        return $model;
    }
}
