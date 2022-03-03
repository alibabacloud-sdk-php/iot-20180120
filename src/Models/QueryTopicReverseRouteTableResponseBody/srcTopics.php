<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicReverseRouteTableResponseBody;

use AlibabaCloud\Tea\Model;

class srcTopics extends Model
{
    /**
     * @var mixed[][]
     */
    public $topic;
    protected $_name = [
        'topic' => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return srcTopics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Topic'])) {
            if (!empty($map['Topic'])) {
                $model->topic = $map['Topic'];
            }
        }

        return $model;
    }
}
