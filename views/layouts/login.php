<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

alex290\admin\assets\Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

       <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner w-100">
           <?= $content ?>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="#" class="external">Webgoal</a></p>
          </div>
        </div>
      </div>
    </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
