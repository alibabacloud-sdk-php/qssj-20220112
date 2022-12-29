<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendImageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class similarGoods extends Model
{
    /**
     * @example "https://img.alicdn.com/imgextra/O1CN01hmx9pJ2MhTW9iEJd9_!!2638679859.jpg"
     *
     * @var string
     */
    public $aiImgUrl;

    /**
     * @example -1
     *
     * @var int
     */
    public $goodsSales;

    /**
     * @example -1
     *
     * @var int
     */
    public $searchVolume;
    protected $_name = [
        'aiImgUrl'     => 'AiImgUrl',
        'goodsSales'   => 'GoodsSales',
        'searchVolume' => 'SearchVolume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiImgUrl) {
            $res['AiImgUrl'] = $this->aiImgUrl;
        }
        if (null !== $this->goodsSales) {
            $res['GoodsSales'] = $this->goodsSales;
        }
        if (null !== $this->searchVolume) {
            $res['SearchVolume'] = $this->searchVolume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return similarGoods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiImgUrl'])) {
            $model->aiImgUrl = $map['AiImgUrl'];
        }
        if (isset($map['GoodsSales'])) {
            $model->goodsSales = $map['GoodsSales'];
        }
        if (isset($map['SearchVolume'])) {
            $model->searchVolume = $map['SearchVolume'];
        }

        return $model;
    }
}
