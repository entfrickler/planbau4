<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <link rel="shortcut icon" href="images/favicon.ico">

        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->

        <?php $this->head() ?>
    </head>
    <body>

        <?php $this->beginBody() ?>
        <div class="wrap">

            <?php
            NavBar::begin([
                'brandLabel' => '<img src="images/logo.png" alt="planbau 4">',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-inverse navbar-fixed-top headroom',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'home', 'url' => ['/site/index']],
                    ['label' => 'über', 'url' => ['/site/about']],
                    ['label' => 'projekte', 'url' => ['/site/projects']],
                    ['label' => 'kontakt', 'url' => ['/site/contact']],
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
            </div>
            <?= $content ?>
        </div>

        <footer id="footer">

            <div class="footer1">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 widget">
                            <h3 class="widget-title">kontakt</h3>
                            <div class="widget-body">
                                <p>hermann rick<br>
                                    gräfenbergstraße 2<br>
                                    65399 kiedrich<br>
                                    tel:  06123- 60 12 60<br>
                                    fax: 06123- 60 12 70<br>

                                    <a href="mailto:architekten (at) planbau4.de">architekten (at) planbau4.de</a><br>
                                </p>	
                            </div>
                        </div>

                        <div class="col-md-3 widget">
                            <h3 class="widget-title">soziale netzwerke</h3>
                            <div class="widget-body">
                                <p class="follow-me-icons clearfix">
                                    <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                    <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                                    <a href=""><i class="fa fa-github fa-2"></i></a>
                                    <a href=""><i class="fa fa-facebook fa-2"></i></a>
                                </p>	
                            </div>
                        </div>

                        <div class="col-md-6 widget">
                            <h3 class="widget-title">anfahrt</h3>
                            <div class="widget-body">
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1281.1863283330354!2d8.08170000000001!3d50.04184999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bdeaedf03d1f71%3A0xe6043a7732549477!2sGr%C3%A4fenbergstra%C3%9Fe+2%2C+65399+Kiedrich!5e0!3m2!1sde!2sde!4v1419028079083" width="100%" frameborder="0" style="border:0"></iframe>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /row of widgets -->
                </div>
            </div>

            <div class="footer2">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 widget">
                            <div class="widget-body">
                                <p class="simplenav">
                                    <?=Html::a('home', ['/site/index']);?> |  
                                    <?=Html::a('über', ['/site/about']);?> |  
                                    <?=Html::a('projekte', ['/site/projects']);?> | 
                                    <?=Html::a('kontakt', ['/site/contact']);?> |  
                                    <?=Html::a('impressum', ['/site/impressum']);?>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 widget">
                            <div class="widget-body">
                                <p class="text-right">
                                    Copyright &copy; <?= date('Y') ?>, planbau 4. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
                                </p>
                            </div>
                        </div>

                    </div> <!-- /row of widgets -->
                </div>
            </div>
        </footer>

        <?php $this->endBody() ?>
        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src="js/template.js"></script>
    </body>
</html>
<?php $this->endPage() ?>
