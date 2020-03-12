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

        
        <!-- Side Navbar -->
        <nav class="side-navbar">
            <div class="side-navbar-wrapper">
                <!-- Sidebar Header    -->
                <div class="sidenav-header d-flex align-items-center justify-content-center">
                    <!-- User Info-->
                    <div class="sidenav-header-inner text-center"><img src="http://placehold.it/128x128" alt="person" class="img-fluid rounded-circle">
                        <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
                    </div>
                    <!-- Small Brand information, appears on minimized sidebar-->
                    <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
                </div>
                <!-- Sidebar Navigation Menus-->
                <div class="main-menu">
                    <h5 class="sidenav-heading">Main</h5>
                    <!--Боковое меню-->
                    <?=
                    alex290\admin\widgets\Menu::widget([
                        "items" => [
                            ["label" => "Home", "url" => "/", "icon" => "fas fa-home"],
                            ["label" => "Layout", "url" => ["/site/layout"], "icon" => "far fa-file"],
                            ["label" => "Error page", "url" => ["/site/error-page"], "icon" => "far fa-window-close"],
                            ["label" => "Admin", "url" => ["/admin"], "icon" => "fas fa-user-lock"],
                            [
                                "label" => "Widgets",
                                "icon" => "fas fa-th-large",
                                "url" => "#",
                                "items" => [
                                    ["label" => "Menu", "url" => ["/site/menu"]],
                                    ["label" => "Panel", "url" => ["/site/panel"]],
                                ],
                            ]
                        ]
                    ])
                    ?>
                </div>
            </div>
        </nav>
        <div class="page">
            <!-- navbar-->
            <header class="header">
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-holder d-flex align-items-center justify-content-between">
                            <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                                    <div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong class="text-primary">Dashboard</strong></div></a></div>
                            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                                <!-- Notifications dropdown-->
                                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                                    <ul aria-labelledby="notifications" class="dropdown-menu">
                                        <li><a rel="nofollow" href="#" class="dropdown-item"> 
                                                <div class="notification d-flex justify-content-between">
                                                    <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                                </div></a></li>
                                        <li><a rel="nofollow" href="#" class="dropdown-item"> 
                                                <div class="notification d-flex justify-content-between">
                                                    <div class="notification-content"><i class="fab fa-twitter"></i>You have 2 followers</div>
                                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                                </div></a></li>
                                        <li><a rel="nofollow" href="#" class="dropdown-item"> 
                                                <div class="notification d-flex justify-content-between">
                                                    <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                                </div></a></li>
                                        <li><a rel="nofollow" href="#" class="dropdown-item"> 
                                                <div class="notification d-flex justify-content-between">
                                                    <div class="notification-content"><i class="fab fa-twitter"></i>You have 2 followers</div>
                                                    <div class="notification-time"><small>10 minutes ago</small></div>
                                                </div></a></li>
                                        <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                                    </ul>
                                </li>
                                <!-- Messages dropdown-->
                                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                                    <ul aria-labelledby="notifications" class="dropdown-menu">
                                        <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                                                <div class="msg-profile"> <img src="http://placehold.it/128x128" alt="..." class="img-fluid rounded-circle"></div>
                                                <div class="msg-body">
                                                    <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                                </div></a></li>
                                        <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                                                <div class="msg-profile"> <img src="http://placehold.it/128x128" alt="..." class="img-fluid rounded-circle"></div>
                                                <div class="msg-body">
                                                    <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                                </div></a></li>
                                        <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                                                <div class="msg-profile"> <img src="http://placehold.it/128x128" alt="..." class="img-fluid rounded-circle"></div>
                                                <div class="msg-body">
                                                    <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                                </div></a></li>
                                        <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                                    </ul>
                                </li>

                                <!-- Log out-->
                                <li class="nav-item"><a href="/site/logout" class="nav-link logout" data-method = 'post'> <span class="d-none d-sm-inline-block">Logout</span><i class="fas fa-sign-out-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- Counts Section -->
            <section class="dashboard-counts section-padding">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Count item widget-->
                        <div class="col-xl-12">
                            <?=
                            Breadcrumbs::widget([
                                'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n",
                                'activeItemTemplate' => '<li class="breadcrumb-item active">{link}</li>', // template for all links
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ])
                            ?>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Content Section-->
            <section class="dashboard-content section-padding">
                <div class="container-fluid">
                    <div class="row">
                        <!-- To Do List-->
                        <div class="col-12">

                            <?= $content ?>
                        </div>

                    </div>
                </div>
            </section>
            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Your company &copy; <?= date('Y') ?></p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>Design by <a href="http://webgoal.ru" class="external">WebGoal</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
