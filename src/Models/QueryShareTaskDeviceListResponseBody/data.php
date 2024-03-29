<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryShareTaskDeviceListResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryShareTaskDeviceListResponseBody\data\deviceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The devices in the sharing task.
     *
     * @var deviceList
     */
    public $deviceList;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageId;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 200
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'deviceList' => 'DeviceList',
        'pageId'     => 'PageId',
        'pageSize'   => 'PageSize',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceList) {
            $res['DeviceList'] = null !== $this->deviceList ? $this->deviceList->toMap() : null;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['DeviceList'])) {
            $model->deviceList = deviceList::fromMap($map['DeviceList']);
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
