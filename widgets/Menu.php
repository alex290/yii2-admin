<?php


namespace alex290\admin\widgets;

use yii\helpers\Html;
use yii\helpers\Url;

class Menu extends \yii\widgets\Menu
{
    public $items;



    public function run()
    {
        $menuItem = $this->items;
        $html = '<ul class="sidebar-nav">';
        if (!empty($menuItem)) {
            foreach ($menuItem as $key => $value) {
                if ($value['type'] == 'header') {
                    $html = $html . $this->headerItem($value);
                } else {
                    $html = $html . $this->item($value, $key);
                }
            }
        }
        $html = $html . '</ul>';


        return $html;
    }

    protected function headerItem($value)
    {
        $html = '<li class="sidebar-header">';
        $html = $html . $value['label'];
        $html = $html . '</li>';
        return $html;
    }

    protected function item($value , $key)
    {
        $html = '<li class="sidebar-item">';
        $url = Url::to();
        $urlTo = is_array($value['url']) ? Url::to($value['url']['0']) : Url::to($value['url']);
        if ($url == $urlTo) {
            $html = '<li class="sidebar-item active">';
        } else {
            $html = '<li class="sidebar-item">';
        }
        
        if (array_key_exists('items', $value)) {
            $html = $html . Html::a($value['icon'] . '<span class="align-middle">' . $value['label'] . '</span>', '#sidBar'. $key, ['class' => "sidebar-link collapsed", 'data-bs-toggle' => "collapse"]);
            $html = $html . $this->items($value['items'], 'sidBar'. $key);
        } else {
            $html = $html . Html::a($value['icon'] . '<span class="align-middle">' . $value['label'] . '</span>', $urlTo, ['class' => "sidebar-link"]);
        }

        $html = $html . '</li>';
        return $html;
    }

    protected function items($value , $id)
    {
        $html = '<ul id="'. $id. '" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">';
        $url = Url::to();
        foreach ($value as $key => $item) {
            $urlTo = is_array($item['url']) ? Url::to($item['url']['0']) : Url::to($item['url']);
            if ($url == $urlTo) {
                $html = $html . '<li class="sidebar-item active">';
            } else {
                $html = $html . '<li class="sidebar-item">';
            }
            $html = $html . Html::a($item['label'], $urlTo, ['class' => "sidebar-link"]);
            $html = $html .'</li>';
        }

        $html = $html . '</ul>';
        return $html;
    }
}
