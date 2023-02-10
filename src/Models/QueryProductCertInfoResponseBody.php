<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductCertInfoResponseBody\productCertInfo;
use AlibabaCloud\Tea\Model;

class QueryProductCertInfoResponseBody extends Model
{
    /**
     * @example MissingProductKey
     *
     * @var string
     */
    public $code;

    /**
     * @example ProductKey is mandatory for this action.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var productCertInfo
     */
    public $productCertInfo;

    /**
     * @example 57b144cf-09fc-4916-a272-a62902d5b207
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'            => 'Code',
        'errorMessage'    => 'ErrorMessage',
        'productCertInfo' => 'ProductCertInfo',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->productCertInfo) {
            $res['ProductCertInfo'] = null !== $this->productCertInfo ? $this->productCertInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryProductCertInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ProductCertInfo'])) {
            $model->productCertInfo = productCertInfo::fromMap($map['ProductCertInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
