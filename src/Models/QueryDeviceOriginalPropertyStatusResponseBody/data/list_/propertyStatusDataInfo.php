<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyStatusResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class propertyStatusDataInfo extends Model
{
    /**
     * @description The identifier of the property.
     *
     * @example Temperture
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The time when the property was modified, in milliseconds.
     *
     * @example 1517553572362
     *
     * @var int
     */
    public $time;

    /**
     * @description The value of the property.
     *
     * @example 26
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'identifier' => 'Identifier',
        'time'       => 'Time',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyStatusDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
