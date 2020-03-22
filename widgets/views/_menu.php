<?php

use yii\helpers\Url;

$numbDropdown = 1;
$url = Url::to();
// debug($url);
?>
<ul class="nav">
    <?php foreach ($menuItem as $key => $valueItem) : ?>
        <?php
        $urlTo = is_array($valueItem['url']) ? Url::to($valueItem['url']['0']) : Url::to($valueItem['url']);
        // debug($urlTo);
        if ($url == $urlTo) {
            $classLi = 'nav-item active';
        } else {
            $classLi = 'nav-item';
        }

        ?>
        <?php if (!array_key_exists('items', $valueItem)) : ?>

            <li class="<?= $classLi ?>">
                <a class="nav-link" href="<?= $urlTo ?>">
                    <i class="mdi <?= $valueItem['icon'] ?> menu-icon"></i>
                    <span class="menu-title"><?= $valueItem['label'] ?></span>
                </a>
            </li>
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#drop<?= $key ?>" aria-expanded="false" aria-controls="drop<?= $key ?>">
                    <i class="mdi <?= $valueItem['icon'] ?> menu-icon"></i>
                    <span class="menu-title"><?= $valueItem['label'] ?></span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="drop<?= $key ?>">
                    <ul class="nav flex-column sub-menu">
                        <?php foreach ($valueItem['items'] as $valueItemDrop) : ?>
                            <?php
                            $urlTo = is_array($valueItemDrop['url']) ? Url::to($valueItemDrop['url']['0']) : Url::to($valueItemDrop['url']);

                            if ($url == $urlTo) {
                                $classLia = 'nav-link active';
                            } else {
                                $classLia = 'nav-link';
                            }
                            ?>
                            <li class="nav-item"><a class="<?= $classLia ?>" href="<?= $urlTo ?>"><?= $valueItemDrop['label'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </li>
            <?php $numbDropdown++; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
