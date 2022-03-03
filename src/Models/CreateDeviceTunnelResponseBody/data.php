<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceTunnelResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $sourceAccessToken;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var string
     */
    public $tunnelId;
    protected $_name = [
        'sourceAccessToken' => 'SourceAccessToken',
        'sourceURI'         => 'SourceURI',
        'tunnelId'          => 'TunnelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceAccessToken) {
            $res['SourceAccessToken'] = $this->sourceAccessToken;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
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
        if (isset($map['SourceAccessToken'])) {
            $model->sourceAccessToken = $map['SourceAccessToken'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }

        return $model;
    }
}
