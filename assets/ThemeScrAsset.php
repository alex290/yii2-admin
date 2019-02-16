<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace alex290\admin\assets;

use yii\web\AssetBundle;

class ThemeScrAsset extends AssetBundle
{
    public $sourcePath = '@alex290/admin/assets/scr';
    
    public $css = [
        'css/style.default.css',
        'css/custom.css',
        'css/jquery-ui.min.css',
    ];
    
    public $js = [
        'js/grasp_mobile_progress_circle-1.0.0.min.js',
//        'js/charts-home.js',
        'js/front.js',
        'js/jquery-ui.min.js',
        'js/datepicker-ru.js',
    ];
}
