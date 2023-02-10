<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDataSourceItemResponse\dataSourceItems;

use AlibabaCloud\Tea\Model;

class dataSourceItem extends Model
{
    /**
     * @var int
     */
    public $dataSourceItemId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'dataSourceItemId' => 'DataSourceItemId',
        'deviceName'       => 'DeviceName',
        'productKey'       => 'ProductKey',
        'scopeType'        => 'ScopeType',
        'topic'            => 'Topic',
    ];

    public function validate()
    {
        Model::validateRequired('dataSourceItemId', $this->dataSourceItemId, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('scopeType', $this->scopeType, true);
        Model::validateRequired('topic', $this->topic, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceItemId) {
            $res['DataSourceItemId'] = $this->dataSourceItemId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceItemId'])) {
            $model->dataSourceItemId = $map['DataSourceItemId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}