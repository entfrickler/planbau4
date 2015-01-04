<?php

/* @var $this yii\web\View */
$this->title = 'über - ' . Yii::$app->params['companyName'];
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
            <?php
            $items = [
                [
                    'url' => 'images/gallery/project1.jpg',
                    'src' => 'images/gallery/thumb_project1.jpg',
                    'options' => ['title' => 'project 1']
                ], [
                    'url' => 'images/gallery/project2.jpg',
                    'src' => 'images/gallery/thumb_project2.jpg',
                    'options' => ['title' => 'project 1']
                ], [
                    'url' => 'images/gallery/project3.jpg',
                    'src' => 'images/gallery/thumb_project3.jpg',
                    'options' => ['title' => 'project 1']
                ],
            ];
            ?>
            <?= dosamigos\gallery\Gallery::widget(['items' => $items]); ?>
            <!--            --><?php
            //            echo Carousel::widget([
            //                'items' => [
            //                    // the item contains only the image
            //                    '<img src=""/>',
            //                    // equivalent to the above
            //                    ['content' => '<img src="images/project2.jpg"/>'],
            //                    // the item contains both the image and the caption
            //                    [
            //                        'content' => '<img src="images/project3.jpg"/>',
            //                        'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
            //                        //'options' => [...],
            //                    ],
            //                ]
            //            ]);
            //            ?>
            <!--            <p></p>-->
        </div>
    </div>
</header>
<!-- /Header -->
