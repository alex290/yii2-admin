<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace alex290\admin\assets;

use yii\web\AssetBundle;

class VendorAsset extends AssetBundle
{
    public $sourcePath = '@alex290/admin/vendor';
    
    public $css = [
        'malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css',
    ];
    
    public $js = [
        'jquery.cookie/jquery.cookie.js',
        'chart.js/Chart.min.js',
        'jquery-validation/jquery.validate.min.js',
        'malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
    ];
}
