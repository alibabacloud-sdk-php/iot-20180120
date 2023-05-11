<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeInstanceDeploymentResponseBody extends Model
{
    /**
     * @description The return code of the operation. A value of Success indicates that the call was successful. Other values indicate that specific errors occurred. For more information, see [Error codes](~~135200~~).
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The deployment task ID that is returned if the call was successful.
     *
     * @example 38d544b1222d45b4b425240167bf****
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @description The error message that is returned if the call failed.
     *
     * @example request parameter error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example C8293A57-6BBC-42FB-B093-BF304D5BF09C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. A value of true indicates that the call was successful. A value of false indicates that the call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'deploymentId' => 'DeploymentId',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return CreateEdgeInstanceDeploymentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
