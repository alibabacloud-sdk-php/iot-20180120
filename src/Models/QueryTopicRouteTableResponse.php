<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicRouteTableResponse\dstTopics;
use AlibabaCloud\Tea\Model;

class QueryTopicRouteTableResponse extends Model
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
     * @var dstTopics
     */
    public $dstTopics;
    protected $_name = [
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'code'         => 'Code',
        'errorMessage' => 'ErrorMessage',
        'dstTopics'    => 'DstTopics',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('dstTopics', $this->dstTopics, true);
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
        if (null !== $this->dstTopics) {
            $res['DstTopics'] = null !== $this->dstTopics ? $this->dstTopics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTopicRouteTableResponse
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
        if (isset($map['DstTopics'])) {
            $model->dstTopics = dstTopics::fromMap($map['DstTopics']);
        }

        return $model;
    }
}
