<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedProductResponse\data\info;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $sourceUid;

    /**
     * @var string
     */
    public $targetUid;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $targetAliyunId;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $targetRegion;

    /**
     * @var string
     */
    public $sourceInstanceName;

    /**
     * @var string
     */
    public $targetInstanceName;
    protected $_name = [
        'sourceUid'          => 'SourceUid',
        'targetUid'          => 'TargetUid',
        'productKey'         => 'ProductKey',
        'sourceInstanceId'   => 'SourceInstanceId',
        'targetInstanceId'   => 'TargetInstanceId',
        'gmtCreate'          => 'GmtCreate',
        'targetAliyunId'     => 'TargetAliyunId',
        'sourceRegion'       => 'SourceRegion',
        'targetRegion'       => 'TargetRegion',
        'sourceInstanceName' => 'SourceInstanceName',
        'targetInstanceName' => 'TargetInstanceName',
    ];

    public function validate()
    {
        Model::validateRequired('sourceUid', $this->sourceUid, true);
        Model::validateRequired('targetUid', $this->targetUid, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('sourceInstanceId', $this->sourceInstanceId, true);
        Model::validateRequired('targetInstanceId', $this->targetInstanceId, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('targetAliyunId', $this->targetAliyunId, true);
        Model::validateRequired('sourceRegion', $this->sourceRegion, true);
        Model::validateRequired('targetRegion', $this->targetRegion, true);
        Model::validateRequired('sourceInstanceName', $this->sourceInstanceName, true);
        Model::validateRequired('targetInstanceName', $this->targetInstanceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceUid) {
            $res['SourceUid'] = $this->sourceUid;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->targetAliyunId) {
            $res['TargetAliyunId'] = $this->targetAliyunId;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->targetRegion) {
            $res['TargetRegion'] = $this->targetRegion;
        }
        if (null !== $this->sourceInstanceName) {
            $res['SourceInstanceName'] = $this->sourceInstanceName;
        }
        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceUid'])) {
            $model->sourceUid = $map['SourceUid'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['TargetAliyunId'])) {
            $model->targetAliyunId = $map['TargetAliyunId'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['TargetRegion'])) {
            $model->targetRegion = $map['TargetRegion'];
        }
        if (isset($map['SourceInstanceName'])) {
            $model->sourceInstanceName = $map['SourceInstanceName'];
        }
        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }

        return $model;
    }
}
