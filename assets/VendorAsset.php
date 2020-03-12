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
        'mdi/css/materialdesignicons.min.css',
        'base/vendor.bundle.base.css',
        'datatables.net-bs4/dataTables.bootstrap4.css',
    ];

    public $js = [
        'chart.js/Chart.min.js',
        'datatables.net/jquery.dataTables.js',
        'datatables.net-bs4/dataTables.bootstrap4.js',
    ];
}
