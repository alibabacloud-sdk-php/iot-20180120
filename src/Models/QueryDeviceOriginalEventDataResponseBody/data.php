<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalEventDataResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalEventDataResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The array of events. Each element represents an event. For more information about the details of the event, see the parameters of the **EventInfo** parameter.
     *
     * @var list_
     */
    public $list;

    /**
     * @description The identifier of the next page.
     *
     * @example Bo***x44Qx
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description Indicates whether the next page exists.
     *
     *   **true**: The next page exists.
     *   **false**: The next page does not exist.
     *
     * If the value ******true** is returned, you can add the value of the **NextPageToken** parameter**** to the next request. This allows you to query the data that is not included in the current query.
     * @example true
     *
     * @var bool
     */
    public $nextValid;
    protected $_name = [
        'list'          => 'List',
        'nextPageToken' => 'NextPageToken',
        'nextValid'     => 'NextValid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->nextValid) {
            $res['NextValid'] = $this->nextValid;
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
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['NextValid'])) {
            $model->nextValid = $map['NextValid'];
        }

        return $model;
    }
}
