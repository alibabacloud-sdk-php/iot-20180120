<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceMessageRoutingResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceMessageRoutingResponse\data\routeContext;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceData;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $targetData;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $topicFilter;

    /**
     * @var routeContext
     */
    public $routeContext;
    protected $_name = [
        'gmtCreate'            => 'GmtCreate',
        'gmtCreateTimestamp'   => 'GmtCreateTimestamp',
        'gmtModified'          => 'GmtModified',
        'gmtModifiedTimestamp' => 'GmtModifiedTimestamp',
        'name'                 => 'Name',
        'sourceData'           => 'SourceData',
        'sourceType'           => 'SourceType',
        'targetData'           => 'TargetData',
        'targetType'           => 'TargetType',
        'topicFilter'          => 'TopicFilter',
        'routeContext'         => 'RouteContext',
    ];

    public function validate()
    {
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtCreateTimestamp', $this->gmtCreateTimestamp, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('gmtModifiedTimestamp', $this->gmtModifiedTimestamp, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('sourceData', $this->sourceData, true);
        Model::validateRequired('sourceType', $this->sourceType, true);
        Model::validateRequired('targetData', $this->targetData, true);
        Model::validateRequired('targetType', $this->targetType, true);
        Model::validateRequired('topicFilter', $this->topicFilter, true);
        Model::validateRequired('routeContext', $this->routeContext, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceData) {
            $res['SourceData'] = $this->sourceData;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->targetData) {
            $res['TargetData'] = $this->targetData;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->topicFilter) {
            $res['TopicFilter'] = $this->topicFilter;
        }
        if (null !== $this->routeContext) {
            $res['RouteContext'] = null !== $this->routeContext ? $this->routeContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceData'])) {
            $model->sourceData = $map['SourceData'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['TargetData'])) {
            $model->targetData = $map['TargetData'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TopicFilter'])) {
            $model->topicFilter = $map['TopicFilter'];
        }
        if (isset($map['RouteContext'])) {
            $model->routeContext = routeContext::fromMap($map['RouteContext']);
        }

        return $model;
    }
}
