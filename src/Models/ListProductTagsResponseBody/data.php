<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListProductTagsResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductTagsResponseBody\data\productTag;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var productTag[]
     */
    public $productTag;
    protected $_name = [
        'productTag' => 'ProductTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productTag) {
            $res['ProductTag'] = [];
            if (null !== $this->productTag && \is_array($this->productTag)) {
                $n = 0;
                foreach ($this->productTag as $item) {
                    $res['ProductTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ProductTag'])) {
            if (!empty($map['ProductTag'])) {
                $model->productTag = [];
                $n                 = 0;
                foreach ($map['ProductTag'] as $item) {
                    $model->productTag[$n++] = null !== $item ? productTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
