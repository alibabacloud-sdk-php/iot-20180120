<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryStudioAppListRequest extends Model
{
    /**
     * @example test1
     *
     * @var string
     */
    public $fuzzyName;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example a123********
     *
     * @var string
     */
    public $projectId;

    /**
     * @example ["webApp", "mobileApp"]
     *
     * @var string[]
     */
    public $types;
    protected $_name = [
        'fuzzyName'     => 'FuzzyName',
        'iotInstanceId' => 'IotInstanceId',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'projectId'     => 'ProjectId',
        'types'         => 'Types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fuzzyName) {
            $res['FuzzyName'] = $this->fuzzyName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryStudioAppListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FuzzyName'])) {
            $model->fuzzyName = $map['FuzzyName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }

        return $model;
    }
}
