<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\SetupStudioAppAuthModeOpenResponseBody\data;

use AlibabaCloud\Tea\Model;

class tokenInfo extends Model
{
    /**
     * @example a12********
     *
     * @var string
     */
    public $bizId;

    /**
     * @example webApp
     *
     * @var string
     */
    public $bizType;

    /**
     * @example YES
     *
     * @var string
     */
    public $isEnable;

    /**
     * @example 25bf576a6c6f**********
     *
     * @var string
     */
    public $token;

    /**
     * @example custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizId'    => 'BizId',
        'bizType'  => 'BizType',
        'isEnable' => 'IsEnable',
        'token'    => 'Token',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tokenInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
