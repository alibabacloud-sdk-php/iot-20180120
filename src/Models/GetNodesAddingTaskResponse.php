<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetNodesAddingTaskResponse\successDevEuis;
use AlibabaCloud\Tea\Model;

class GetNodesAddingTaskResponse extends Model
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
    public $taskId;

    /**
     * @var string
     */
    public $taskState;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var successDevEuis
     */
    public $successDevEuis;
    protected $_name = [
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'code'           => 'Code',
        'errorMessage'   => 'ErrorMessage',
        'taskId'         => 'TaskId',
        'taskState'      => 'TaskState',
        'totalCount'     => 'TotalCount',
        'successCount'   => 'SuccessCount',
        'successDevEuis' => 'SuccessDevEuis',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('taskState', $this->taskState, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('successCount', $this->successCount, true);
        Model::validateRequired('successDevEuis', $this->successDevEuis, true);
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->successDevEuis) {
            $res['SuccessDevEuis'] = null !== $this->successDevEuis ? $this->successDevEuis->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodesAddingTaskResponse
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['SuccessDevEuis'])) {
            $model->successDevEuis = successDevEuis::fromMap($map['SuccessDevEuis']);
        }

        return $model;
    }
}
