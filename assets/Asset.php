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
        // 'alex290\admin\assets\BootstrapAsset',
        'alex290\admin\assets\ThemeAsset',
    ];


    public function init()
    {
        parent::init();
        // resetting BootstrapAsset to not load own css files
        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => [],
            'js' => []
        ];
        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapPluginAsset'] = [
            'css' => [],
            'js' => []
        ];
    }
}
