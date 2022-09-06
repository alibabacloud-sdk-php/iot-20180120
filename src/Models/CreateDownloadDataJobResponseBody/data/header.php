<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $dataPrecision;

    /**
     * @var string
     */
    public $dimDateClass;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var string
     */
    public $geoClass;

    /**
     * @var string
     */
    public $timeClass;

    /**
     * @var string
     */
    public $typeClass;
    protected $_name = [
        'alias'         => 'Alias',
        'dataPrecision' => 'DataPrecision',
        'dimDateClass'  => 'DimDateClass',
        'fieldName'     => 'FieldName',
        'fieldType'     => 'FieldType',
        'geoClass'      => 'GeoClass',
        'timeClass'     => 'TimeClass',
        'typeClass'     => 'TypeClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->dataPrecision) {
            $res['DataPrecision'] = $this->dataPrecision;
        }
        if (null !== $this->dimDateClass) {
            $res['DimDateClass'] = $this->dimDateClass;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldType) {
            $res['FieldType'] = $this->fieldType;
        }
        if (null !== $this->geoClass) {
            $res['GeoClass'] = $this->geoClass;
        }
        if (null !== $this->timeClass) {
            $res['TimeClass'] = $this->timeClass;
        }
        if (null !== $this->typeClass) {
            $res['TypeClass'] = $this->typeClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return header
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['DataPrecision'])) {
            $model->dataPrecision = $map['DataPrecision'];
        }
        if (isset($map['DimDateClass'])) {
            $model->dimDateClass = $map['DimDateClass'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['FieldType'])) {
            $model->fieldType = $map['FieldType'];
        }
        if (isset($map['GeoClass'])) {
            $model->geoClass = $map['GeoClass'];
        }
        if (isset($map['TimeClass'])) {
            $model->timeClass = $map['TimeClass'];
        }
        if (isset($map['TypeClass'])) {
            $model->typeClass = $map['TypeClass'];
        }

        return $model;
    }
}