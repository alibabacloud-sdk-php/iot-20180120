<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $spec;

    /**
     * @var bool
     */
    public $bizEnable;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleAttachTime;

    /**
     * @var int
     */
    public $latestDeploymentStatus;

    /**
     * @var string
     */
    public $latestDeploymentType;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @var int
     */
    public $roleAttachTimestamp;
    protected $_name = [
        'instanceId'             => 'InstanceId',
        'name'                   => 'Name',
        'tags'                   => 'Tags',
        'type'                   => 'Type',
        'spec'                   => 'Spec',
        'bizEnable'              => 'BizEnable',
        'gmtCreate'              => 'GmtCreate',
        'gmtModified'            => 'GmtModified',
        'roleArn'                => 'RoleArn',
        'roleName'               => 'RoleName',
        'roleAttachTime'         => 'RoleAttachTime',
        'latestDeploymentStatus' => 'LatestDeploymentStatus',
        'latestDeploymentType'   => 'LatestDeploymentType',
        'gmtCreateTimestamp'     => 'GmtCreateTimestamp',
        'gmtModifiedTimestamp'   => 'GmtModifiedTimestamp',
        'roleAttachTimestamp'    => 'RoleAttachTimestamp',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('spec', $this->spec, true);
        Model::validateRequired('bizEnable', $this->bizEnable, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('roleArn', $this->roleArn, true);
        Model::validateRequired('roleName', $this->roleName, true);
        Model::validateRequired('roleAttachTime', $this->roleAttachTime, true);
        Model::validateRequired('latestDeploymentStatus', $this->latestDeploymentStatus, true);
        Model::validateRequired('latestDeploymentType', $this->latestDeploymentType, true);
        Model::validateRequired('gmtCreateTimestamp', $this->gmtCreateTimestamp, true);
        Model::validateRequired('gmtModifiedTimestamp', $this->gmtModifiedTimestamp, true);
        Model::validateRequired('roleAttachTimestamp', $this->roleAttachTimestamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->bizEnable) {
            $res['BizEnable'] = $this->bizEnable;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->roleAttachTime) {
            $res['RoleAttachTime'] = $this->roleAttachTime;
        }
        if (null !== $this->latestDeploymentStatus) {
            $res['LatestDeploymentStatus'] = $this->latestDeploymentStatus;
        }
        if (null !== $this->latestDeploymentType) {
            $res['LatestDeploymentType'] = $this->latestDeploymentType;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->roleAttachTimestamp) {
            $res['RoleAttachTimestamp'] = $this->roleAttachTimestamp;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['BizEnable'])) {
            $model->bizEnable = $map['BizEnable'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['RoleAttachTime'])) {
            $model->roleAttachTime = $map['RoleAttachTime'];
        }
        if (isset($map['LatestDeploymentStatus'])) {
            $model->latestDeploymentStatus = $map['LatestDeploymentStatus'];
        }
        if (isset($map['LatestDeploymentType'])) {
            $model->latestDeploymentType = $map['LatestDeploymentType'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['RoleAttachTimestamp'])) {
            $model->roleAttachTimestamp = $map['RoleAttachTimestamp'];
        }

        return $model;
    }
}
