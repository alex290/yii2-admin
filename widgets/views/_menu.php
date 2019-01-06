<?php

use yii\helpers\Url;

$numbDropdown = 1;
$url = Url::to();
?>
<ul id="side-main-menu" class="side-menu list-unstyled">
    <?php foreach ($menuItem as $valueItem): ?>
        <?php if (!array_key_exists('items', $valueItem)): ?>
            <?php
            $urlTo = is_array($valueItem['url']) ? Url::to($valueItem['url']['0']) : Url::to($valueItem['url']);
            ?>
            <li<?= $url == $urlTo ? ' class="active"' : '' ?>><a href="<?= $urlTo ?>"> <i class="<?= $valueItem['icon'] ?> w-25px text-center"></i> <?= $valueItem['label'] ?></a></li>
        <?php else: ?>
            <li><a href="#exampledropdownDropdown-<?= $numbDropdown ?>" aria-expanded="false" data-toggle="collapse"> <i class="<?= $valueItem['icon'] ?> w-25px text-center"></i><?= $valueItem['label'] ?> </a>
                <ul id="exampledropdownDropdown-<?= $numbDropdown ?>" class="collapse list-unstyled ">
                    <?php foreach ($valueItem['items'] as $valueItemDrop): ?>
                        <?php
                        $urlTo = is_array($valueItemDrop['url']) ? Url::to($valueItemDrop['url']['0']) : Url::to($valueItemDrop['url']);
                        ?>
                        <li<?= $url == $urlTo ? ' class="active"' : '' ?>><a href="<?= $urlTo ?>"><?= $valueItemDrop['label'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <?php $numbDropdown++; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>