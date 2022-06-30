<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetStoreSalesVolumeTopResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $shopName;
    protected $_name = [
        'shopName' => 'ShopName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
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
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }

        return $model;
    }
}
