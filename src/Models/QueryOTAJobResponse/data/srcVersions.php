<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponse\data;

use AlibabaCloud\Tea\Model;

class srcVersions extends Model
{
    /**
     * @description SrcVersion
     *
     * @var string[]
     */
    public $srcVersion;
    protected $_name = [
        'srcVersion' => 'SrcVersion',
    ];

    public function validate()
    {
        Model::validateRequired('srcVersion', $this->srcVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return srcVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SrcVersion'])) {
            if (!empty($map['SrcVersion'])) {
                $model->srcVersion = $map['SrcVersion'];
            }
        }

        return $model;
    }
}
