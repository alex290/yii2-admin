<?php


namespace alex290\admin\widgets;


class Menu extends \yii\widgets\Menu
{
    public $items;
    
    
    public function run()
    {
        $menuItem = $this->items;     
        
        return $this->render('_menu', ['menuItem' => $menuItem]);
    }
}