<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByFirmwareResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByFirmwareResponseBody\data\simpleOTAJobInfo\tags;
use AlibabaCloud\Tea\Model;

class simpleOTAJobInfo extends Model
{
    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $selectionType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $targetSelection;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var string
     */
    public $utcEndTime;

    /**
     * @var string
     */
    public $utcModified;

    /**
     * @var string
     */
    public $utcStartTime;
    protected $_name = [
        'firmwareId'      => 'FirmwareId',
        'jobId'           => 'JobId',
        'jobStatus'       => 'JobStatus',
        'jobType'         => 'JobType',
        'productKey'      => 'ProductKey',
        'selectionType'   => 'SelectionType',
        'tags'            => 'Tags',
        'targetSelection' => 'TargetSelection',
        'utcCreate'       => 'UtcCreate',
        'utcEndTime'      => 'UtcEndTime',
        'utcModified'     => 'UtcModified',
        'utcStartTime'    => 'UtcStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->selectionType) {
            $res['SelectionType'] = $this->selectionType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->targetSelection) {
            $res['TargetSelection'] = $this->targetSelection;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcEndTime) {
            $res['UtcEndTime'] = $this->utcEndTime;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }
        if (null !== $this->utcStartTime) {
            $res['UtcStartTime'] = $this->utcStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return simpleOTAJobInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SelectionType'])) {
            $model->selectionType = $map['SelectionType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TargetSelection'])) {
            $model->targetSelection = $map['TargetSelection'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcEndTime'])) {
            $model->utcEndTime = $map['UtcEndTime'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }
        if (isset($map['UtcStartTime'])) {
            $model->utcStartTime = $map['UtcStartTime'];
        }

        return $model;
    }
}
