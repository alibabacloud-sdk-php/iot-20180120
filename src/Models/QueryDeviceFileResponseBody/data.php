<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $utcCreatedOn;
    protected $_name = [
        'downloadUrl'  => 'DownloadUrl',
        'fileId'       => 'FileId',
        'name'         => 'Name',
        'size'         => 'Size',
        'utcCreatedOn' => 'UtcCreatedOn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->utcCreatedOn) {
            $res['UtcCreatedOn'] = $this->utcCreatedOn;
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
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['UtcCreatedOn'])) {
            $model->utcCreatedOn = $map['UtcCreatedOn'];
        }

        return $model;
    }
}
