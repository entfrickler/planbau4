<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'über - '.Yii::$app->params['companyHead'].' | '.Yii::$app->params['companySub'];
//$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Header -->
<header id="head">
    <div class="container">
        <div class="row">
            <h1 class="lead"><?php echo Yii::$app->params['companyOwner']; ?></h1>
            <p>dipl.ing. architekt</p>
            <img src="http://placehold.it/200x200" alt="foto">
            <p class="tagline"></p>
            <p>1991 gründung planbau 4</p>
            <p>1983-1988 architekturstudium in wiesbaden</p>
        </div>
    </div>
</header>
<!-- /Header -->
