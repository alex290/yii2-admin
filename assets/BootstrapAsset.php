<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace alex290\admin\assets;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@alex290/admin/assets/scr';
    
    public $css = [
        'css/bootstrap.min.css',
    ];
    public $js = [
        'js/popper.min.js',
        'js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
