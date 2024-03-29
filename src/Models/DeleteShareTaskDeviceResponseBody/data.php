<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\DeleteShareTaskDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $progressId;
    protected $_name = [
        'progress'   => 'Progress',
        'progressId' => 'ProgressId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->progressId) {
            $res['ProgressId'] = $this->progressId;
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
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProgressId'])) {
            $model->progressId = $map['ProgressId'];
        }

        return $model;
    }
}
