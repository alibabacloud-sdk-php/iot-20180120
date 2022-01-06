<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeDriverRequest extends Model
{
    /**
     * @var string
     */
    public $cpuArch;

    /**
     * @var string
     */
    public $driverName;

    /**
     * @var string
     */
    public $driverProtocol;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var bool
     */
    public $isBuiltIn;

    /**
     * @var string
     */
    public $runtime;
    protected $_name = [
        'cpuArch'        => 'CpuArch',
        'driverName'     => 'DriverName',
        'driverProtocol' => 'DriverProtocol',
        'iotInstanceId'  => 'IotInstanceId',
        'isBuiltIn'      => 'IsBuiltIn',
        'runtime'        => 'Runtime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuArch) {
            $res['CpuArch'] = $this->cpuArch;
        }
        if (null !== $this->driverName) {
            $res['DriverName'] = $this->driverName;
        }
        if (null !== $this->driverProtocol) {
            $res['DriverProtocol'] = $this->driverProtocol;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->isBuiltIn) {
            $res['IsBuiltIn'] = $this->isBuiltIn;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeDriverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
        }
        if (isset($map['DriverName'])) {
            $model->driverName = $map['DriverName'];
        }
        if (isset($map['DriverProtocol'])) {
            $model->driverProtocol = $map['DriverProtocol'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['IsBuiltIn'])) {
            $model->isBuiltIn = $map['IsBuiltIn'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }

        return $model;
    }
}
