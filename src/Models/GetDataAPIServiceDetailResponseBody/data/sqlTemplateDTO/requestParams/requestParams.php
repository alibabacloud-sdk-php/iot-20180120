<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody\data\sqlTemplateDTO\requestParams;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @example 0
     *
     * @var string
     */
    public $example;

    /**
     * @example status
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $required;

    /**
     * @example INTEGER
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'desc'     => 'Desc',
        'example'  => 'Example',
        'name'     => 'Name',
        'required' => 'Required',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->example) {
            $res['Example'] = $this->example;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Example'])) {
            $model->example = $map['Example'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
