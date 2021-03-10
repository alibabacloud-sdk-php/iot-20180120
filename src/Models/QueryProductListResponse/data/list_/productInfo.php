<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductListResponse\data\list_;

use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $authType;
    protected $_name = [
        'gmtCreate'   => 'GmtCreate',
        'dataFormat'  => 'DataFormat',
        'description' => 'Description',
        'deviceCount' => 'DeviceCount',
        'nodeType'    => 'NodeType',
        'productKey'  => 'ProductKey',
        'productName' => 'ProductName',
        'authType'    => 'AuthType',
    ];

    public function validate()
    {
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('dataFormat', $this->dataFormat, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('deviceCount', $this->deviceCount, true);
        Model::validateRequired('nodeType', $this->nodeType, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('authType', $this->authType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        return $model;
    }
}
