<?php
/* @var $this yii\web\View */
$this->title = 'home - '.Yii::$app->params['companyHead'].' | '.Yii::$app->params['companySub'];
?>
<!-- Header -->
<header id="head">
    <div class="container">
        <div class="row">
            <h1 class="lead"><?php echo Yii::$app->params['companyHead']; ?></h1>
            <p class="tagline">architekten . ingenieure</p>
            <img src="images/kleine_bilder.jpg" alt="häuser">
            <p></p>
            <p class="tagline"></p>
            <p class="tagline"><?php echo Yii::$app->params['companyOwner']; ?> architekt |
                <?php echo Yii::$app->params['companyStreet'] ?> |
                <?php echo Yii::$app->params['companyAddress'] ?> |
                <a href="tel:<?php echo Yii::$app->params['companyPhone'] ?>">tel: <?php echo Yii::$app->params['companyPhone'] ?></a> |
                <a href="tel:<?php echo Yii::$app->params['companyFax'] ?>">fax: <?php echo Yii::$app->params['companyFax'] ?></a> |
                <a href="mailto:architekten (at) planbau4.de">architekten (at) planbau4.de</a></p>
            <p></p>
        </div>
    </div>
</header>
<!-- /Header -->
