<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ClearDeviceDesiredPropertyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {\"temperature\":0}
     *
     * @var string
     */
    public $versions;
    protected $_name = [
        'versions' => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
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
        if (isset($map['Versions'])) {
            $model->versions = $map['Versions'];
        }

        return $model;
    }
}
