<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class propertyStatusInfo extends Model
{
    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'unit'       => 'Unit',
        'identifier' => 'Identifier',
        'dataType'   => 'DataType',
        'time'       => 'Time',
        'value'      => 'Value',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyStatusInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
