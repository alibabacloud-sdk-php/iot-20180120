<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceChannelResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceChannelResponseBody\data\channelList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var channelList
     */
    public $channelList;
    protected $_name = [
        'total'       => 'Total',
        'pageSize'    => 'PageSize',
        'currentPage' => 'CurrentPage',
        'channelList' => 'ChannelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->channelList) {
            $res['ChannelList'] = null !== $this->channelList ? $this->channelList->toMap() : null;
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ChannelList'])) {
            $model->channelList = channelList::fromMap($map['ChannelList']);
        }

        return $model;
    }
}
