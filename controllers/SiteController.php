<?php

namespace app\controllers;

use himiklab\thumbnail\EasyThumbnailImage;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionProjects()
    {
        return $this->render('projects');
    }

    public function getGalleryImages(){
        $images = [
            [
                'url' => 'images/gallery/1.png',
                'src' => EasyThumbnailImage::thumbnailFileUrl('images/gallery/1.png',300 , 200),
                'options' => ['title' => 'wohnhaus smu, eltville']
            ], [
                'url' => 'images/gallery/2.png',
                'src' => EasyThumbnailImage::thumbnailFileUrl('images/gallery/2.png',300 , 200),
                'options' => ['title' => 'wohnhaus smu, eltville']
            ], [
                'url' => 'images/gallery/3.png',
                'src' => EasyThumbnailImage::thumbnailFileUrl('images/gallery/3.png',300 , 200),
                'options' => ['title' => 'wohnhaus smu, eltville']
            ], [
                'url' => 'images/gallery/4.png',
                'src' => EasyThumbnailImage::thumbnailFileUrl('images/gallery/4.png',300 , 200),
                'options' => ['title' => 'wohnhaus smu, eltville']
            ],
        ];
        return $images;
    }
}
