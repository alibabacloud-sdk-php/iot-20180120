<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTagsResponseBody\invalidProductTags;
use AlibabaCloud\Tea\Model;

class CreateProductTagsResponseBody extends Model
{
    /**
     * @description The error code returned if the call fails. For more information, see [Error codes](~~87387~~).
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned if the request fails.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The invalid product tags returned if the call fails.
     *
     * @var invalidProductTags
     */
    public $invalidProductTags;

    /**
     * @description The ID of the request.
     *
     * @example E55E50B7-40EE-4B6B-8BBE-D3ED55CCF565
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful.
     *
     *   **true**: The call was successful. The tags were attached to the product.
     *   **false**: The call failed. This value indicates that the tags failed to be attached to the product.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'               => 'Code',
        'errorMessage'       => 'ErrorMessage',
        'invalidProductTags' => 'InvalidProductTags',
        'requestId'          => 'RequestId',
        'success'            => 'Success',
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
        if (null !== $this->invalidProductTags) {
            $res['InvalidProductTags'] = null !== $this->invalidProductTags ? $this->invalidProductTags->toMap() : null;
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
     * @return CreateProductTagsResponseBody
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
        if (isset($map['InvalidProductTags'])) {
            $model->invalidProductTags = invalidProductTags::fromMap($map['InvalidProductTags']);
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
