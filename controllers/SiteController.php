<?php

namespace app\controllers;

use app\models\HiFeedback;
use app\models\HiGallery;
use app\models\HiStok;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;


class SiteController extends AppController
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $this->setTitle('~ ГИМАЛАИ СПА ~');


        return $this->render('index');
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////

    public function actionService(){
        //улуги
        $this->setTitle('1');

        return $this->render('service');
    }

    public function actionCertificates(){
        //сертификаты
        $this->setTitle('2');
        return $this->render('certificates');
    }

    public function actionStok(){
        //акции
        $this->setTitle('3');
        $stoks=HiStok::find()->all();
        return $this->render('stok',compact('stoks'));
    }

    public function actionGallery(){
        //галерея
        $this->setTitle('4');

        $gallery=HiGallery::find()->where(['status'=>1])->all();


        return $this->render('gallery',compact('gallery'));
    }

    public function actionContacts(){
        //контакты
        $this->setTitle('5');
        return $this->render('contacts');
    }

    public function actionFeedback(){
//        отзывы
        $this->setTitle('6');
        $comments= HiFeedback::find()->where(['status'=>1])->all();
        $feed = new HiFeedback();

        if($feed->load(Yii::$app->request->post())){

            if ($feed->save()){
                Yii::$app->session->setFlash('success','Ваш отзыв принят');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error','Ошибка ввода');
            }
        }

        return $this->render('feedback',compact('comments','feed'));
    }

    public function actionEtiket(){
//        спа этикет
        $this->setTitle('7');

        return $this->render('etiket');
    }

    public function actionAgreement(){
//        пользовательское соглашение
        $this->setTitle('8');

        return $this->render('agreement');
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }



}
