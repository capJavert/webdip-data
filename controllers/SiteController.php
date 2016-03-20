<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\DataUsers;

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

    public function actionThanks()
    {
        return $this->render('thanks');
    }

    public function actionIndex()
    {
      $model = new DataUsers();

      if ($model->load(Yii::$app->request->post())) {
        $model->drzava = $_POST['drzava'];
        $model->spol = $_POST['spol'];

        if($model->validate()) {
          $model->save();
        } else
        var_dump($model->getErrors()) or die;

        return $this->redirect('/site/thanks');
      } else {
        return $this->render('create', [
            'model' => $model,
        ]);
      }
    }

    public function actionTable()
    {
      $models = DataUsers::find()->all();

        return $this->render('table', [
            'models' => $models,
        ]);
    }
}
