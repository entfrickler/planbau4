<?php

use himiklab\thumbnail\EasyThumbnailImage;
use app\widgets\GalleryDiv;
use yii\bootstrap\Carousel;

/* @var $this yii\web\View */
$this->title = 'projekte - '.Yii::$app->params['companyHead'].' | '.Yii::$app->params['companySub'];
//$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Header -->
<header id="head">
    <div class="container">
        <div class="row">

            <h1 class="lead">projekte</h1>

            <p></p>
        </div>
        <div class="row">

                <div class="container">

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://placehold.it/800x400" alt="...">
                                <div class="carousel-caption">
                                    <h2>Heading</h2>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/800x400" alt="...">
                                <div class="carousel-caption">
                                    <h2>Heading</h2>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/800x400" alt="...">
                                <div class="carousel-caption">
                                    <h2>Heading</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>

                </div>

            <?php
            echo Carousel::widget([
                'items' => [
                    // the item contains only the image
                    '<img src="images/gallery/1.png"/>',
                    // equivalent to the above
                    ['content' => '<img src="images/gallery/2.png"/>'],
                    // the item contains both the image and the caption
                    [
                        'content' => '<img src="images/gallery/3.png"/>',
                        'caption' => '<div class="carousel-caption"><h2>This is title</h2><p>This is the caption text</p></div>',
                    //'options' => [...],
                    ],
                    [
                        'content' => '<img src="images/gallery/3.png"/>',
                        'caption' => '<div class="carousel-caption"><h4>This is title</h4><p>This is the caption text</p></div>',
                    //'options' => [...],
                    ],
                    [
                        'content' => '<img src="images/gallery/3.png"/>',
                        'caption' => '<div class="carousel-caption"><h4>This is title</h4><p>This is the caption text</p></div>',
                    //'options' => [...],
                    ],
                    [
                        'content' => '<img src="images/gallery/4.png"/>',
                        'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                    //'options' => [...],
                    ],
                ],
                'controls' => ['<span class="glyphicon glyphicon-chevron-left"></span>', '<span class="glyphicon glyphicon-chevron-right"></span>'],
                'options' => ['class' => 'slide'],
            ]);
            ?>
            <p></p>

            <?= GalleryDiv::widget(['items' => $this->context->getGalleryImages()]); ?>


        </div>
    </div>
</header>
<!-- /Header -->
