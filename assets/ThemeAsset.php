<?php

/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace alex290\admin\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@alex290/admin/assets/scr';

    public $css = [
        'css/glyphicons.css',
        'css/style.css',
    ];

    public $js = [
        'js/off-canvas.js',
        'js/hoverable-collapse.js',
        'js/template.js',
        'js/dashboard.js',
        'js/data-table.js',
        'js/jquery.dataTables.js',
        'js/dataTables.bootstrap4.js',
    ];
}
