<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupListResponseBody\data;

use AlibabaCloud\Tea\Model;

class groupInfo extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupDesc;
    protected $_name = [
        'groupId'   => 'GroupId',
        'utcCreate' => 'UtcCreate',
        'groupName' => 'GroupName',
        'groupDesc' => 'GroupDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupDesc) {
            $res['GroupDesc'] = $this->groupDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupDesc'])) {
            $model->groupDesc = $map['GroupDesc'];
        }

        return $model;
    }
}
