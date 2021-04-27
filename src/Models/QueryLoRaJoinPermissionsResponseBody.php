<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLoRaJoinPermissionsResponseBody\joinPermissions;
use AlibabaCloud\Tea\Model;

class QueryLoRaJoinPermissionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var joinPermissions
     */
    public $joinPermissions;
    protected $_name = [
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'code'            => 'Code',
        'errorMessage'    => 'ErrorMessage',
        'productKey'      => 'ProductKey',
        'joinPermissions' => 'JoinPermissions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->joinPermissions) {
            $res['JoinPermissions'] = null !== $this->joinPermissions ? $this->joinPermissions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLoRaJoinPermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['JoinPermissions'])) {
            $model->joinPermissions = joinPermissions::fromMap($map['JoinPermissions']);
        }

        return $model;
    }
}
