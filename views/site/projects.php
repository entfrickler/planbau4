<?php

use yii\bootstrap\Carousel;

/* @var $this yii\web\View */
$this->title = 'über - '.Yii::$app->params['companyName'];
//$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Header -->
<header id="head">
    <div class="container">
        <div class="row">

            <h1 class="lead">hermann rick</h1>
        </div>
        <div class="row">
            <?php
            echo Carousel::widget([
                'items' => [
                    // the item contains only the image
                    '<img src="images/project1.jpg"/>',
                    // equivalent to the above
                    ['content' => '<img src="images/project2.jpg"/>'],
                    // the item contains both the image and the caption
                    [
                        'content' => '<img src="images/project3.jpg"/>',
                        'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                        //'options' => [...],
                    ],
                ]
            ]);
            ?>
        </div>
    </div>
</header>
<!-- /Header -->
