<?php

use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = Yii::$app->params['companyName'];
//$this->params['breadcrumbs'][] = $this->title;
?>


<!-- Header -->
<header id="head">
    <div class="container">
        <div class="row">
                <h1 class="lead">kontakt formular</h1>

                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                    <div class="alert alert-success">
                        Thank you for contacting us. We will respond to you as soon as possible.
                    </div>

                    <p>
                        Note that if you turn on the Yii debugger, you should be able
                        to view the mail message on the mail panel of the debugger.
                        <?php if (Yii::$app->mailer->useFileTransport): ?>
                            Because the application is in development mode, the email is not sent but saved as
                            a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                            Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                            application component to be false to enable email sending.
                        <?php endif; ?>
                    </p>

                <?php else: ?>

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <div class="row">
                        <div class="col-sm-4">
                            <?= $form->field($model, 'name', ['template' => '{input}{error}'])->textInput(['data-default' => '', 'placeholder' => 'name']) ?>
                        </div>

                        <div class="col-sm-4">
                            <?= $form->field($model, 'email', ['template' => '{input}{error}'])->textInput(['data-default' => '', 'placeholder' => 'email']) ?>
                        </div>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'subject', ['template' => '{input}{error}'])->textInput(['data-default' => '', 'placeholder' => 'telefon']) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?=
                            $form->field($model, 'body', ['template' => '{input}{error}'])->textArea(['rows' => 9
                                , 'data-default' => '', 'placeholder' => 'nachricht...'])
                            ?>
                        </div>
                    </div>
                    <div class="row">

                        <?=
                        $form->field($model, 'verifyCode', ['template' => '<div class="col-sm-6">{input}{error}</div>'])->widget(Captcha::className(), [
                            'template' => '<div class="col-sm-3">{image}</div><div class="col-sm-3">{input}</div>',
                        ])
                        ?>
                        <div class="col-sm-6 text-right">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-action', 'name' => 'contact-button']) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>



                <?php endif; ?>
            </div>
        </div>
</header>
<!-- /Header -->
