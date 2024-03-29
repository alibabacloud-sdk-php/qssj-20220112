<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendIndexResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0.80329525
     *
     * @var float
     */
    public $brandIndex;

    /**
     * @example 4.5877037
     *
     * @var float
     */
    public $ECommerceIndex;

    /**
     * @example 0.81578285
     *
     * @var float
     */
    public $institutionalIndex;

    /**
     * @example 0.80389094
     *
     * @var float
     */
    public $mediaIndex;

    /**
     * @example 0.84380144
     *
     * @var float
     */
    public $socialIndex;

    /**
     * @var float
     */
    public $trendIndex;

    /**
     * @example 202111
     *
     * @var string
     */
    public $yearMonth;
    protected $_name = [
        'brandIndex'         => 'BrandIndex',
        'ECommerceIndex'     => 'ECommerceIndex',
        'institutionalIndex' => 'InstitutionalIndex',
        'mediaIndex'         => 'MediaIndex',
        'socialIndex'        => 'SocialIndex',
        'trendIndex'         => 'TrendIndex',
        'yearMonth'          => 'YearMonth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brandIndex) {
            $res['BrandIndex'] = $this->brandIndex;
        }
        if (null !== $this->ECommerceIndex) {
            $res['ECommerceIndex'] = $this->ECommerceIndex;
        }
        if (null !== $this->institutionalIndex) {
            $res['InstitutionalIndex'] = $this->institutionalIndex;
        }
        if (null !== $this->mediaIndex) {
            $res['MediaIndex'] = $this->mediaIndex;
        }
        if (null !== $this->socialIndex) {
            $res['SocialIndex'] = $this->socialIndex;
        }
        if (null !== $this->trendIndex) {
            $res['TrendIndex'] = $this->trendIndex;
        }
        if (null !== $this->yearMonth) {
            $res['YearMonth'] = $this->yearMonth;
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
        if (isset($map['BrandIndex'])) {
            $model->brandIndex = $map['BrandIndex'];
        }
        if (isset($map['ECommerceIndex'])) {
            $model->ECommerceIndex = $map['ECommerceIndex'];
        }
        if (isset($map['InstitutionalIndex'])) {
            $model->institutionalIndex = $map['InstitutionalIndex'];
        }
        if (isset($map['MediaIndex'])) {
            $model->mediaIndex = $map['MediaIndex'];
        }
        if (isset($map['SocialIndex'])) {
            $model->socialIndex = $map['SocialIndex'];
        }
        if (isset($map['TrendIndex'])) {
            $model->trendIndex = $map['TrendIndex'];
        }
        if (isset($map['YearMonth'])) {
            $model->yearMonth = $map['YearMonth'];
        }

        return $model;
    }
}
