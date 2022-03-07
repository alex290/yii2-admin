<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace alex290\admin\assets;

class Asset extends \yii\web\AssetBundle
{

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
        'alex290\admin\assets\BootstrapAsset',
        'alex290\admin\assets\ThemeAsset',
    ];

    public $sourcePath = '@alex290/admin/assets/scr';

}
