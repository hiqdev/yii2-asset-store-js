<?php

/*
 * Yii2 asset for store.js
 *
 * @link      https://github.com/hiqdev/yii2-asset-store-js
 * @package   yii2-asset-store-js
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\assets\StoreJs;

/**
 * Asset bundle for StoreJs plugin.
 */
class StoreJsAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/store';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'store.min.js',
    ];
}
