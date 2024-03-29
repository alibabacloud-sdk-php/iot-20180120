<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListDestinationRequest extends Model
{
    /**
     * @example iot-2w****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example DataPurpose
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The actions of forwarding data to data destinations. Data is processed by using a parser script before the data is forwarded. Valid values:
     *
     *   **REPUBLISH**: forwards topic data to an IoT Platform communication topic.
     *   **AMQP**: forwards topic data to an Advanced Message Queuing Protocol (AMQP) consumer group.
     *   **DATAHUB**: forwards topic data to Alibaba Cloud DataHub for stream data processing.
     *   **ONS**: forwards topic data to Message Queue for Apache RocketMQ for message distribution.
     *   **MNS**: forwards topic data to Message Service (MNS) for message transmission.
     *   **FC**: forwards topic data to Function Compute for event computing.
     *   **OTS**: forwards topic data to Tablestore for NoSQL data storage.
     *
     * @example ["REPUBLISH", "OTS"]
     *
     * @var string[]
     */
    public $types;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'page'          => 'Page',
        'pageSize'      => 'PageSize',
        'searchName'    => 'SearchName',
        'types'         => 'Types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDestinationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }

        return $model;
    }
}
