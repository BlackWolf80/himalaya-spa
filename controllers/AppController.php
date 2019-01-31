<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 22.12.18
 * Time: 20:36
 */

namespace app\controllers;

use app\models\HiTopMenu;
use Yii;
use yii\web\Controller;

class AppController extends Controller
{


    public function debug($arr)
    {
        echo '<pre>'. print_r($arr, true).'</pre>';
    }


    protected function setMeta($title = null, $keywords = null, $description = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }


    public function setTitle($id){

        $session = Yii::$app->session;
        if (!$session->isActive){
            $session->open();
        }

        if(!is_numeric($id)){  $_SESSION['titleHeader'] = $id;}
        else{
            $menuItem = HiTopMenu::find()->where(['id'=>$id])->one();

            $_SESSION['titleHeader'] = $menuItem['title'];
            $_SESSION['title'] = $menuItem['name'];
        }

    }
    public function mailSend($emFrom,$emTo,$model,$subject,$layoutMessage){
        Yii::$app->mailer->compose ($layoutMessage, ['model' => $model])
            ->setFrom ([$emFrom => 'Сервис обратной связи Technograni']) //от кого
            ->setTo ($emTo)                                              //кому
            ->setSubject ($subject)                                      //заголовок
            ->send ();
    }



}

function debug($arr){echo '<pre>'. print_r($arr, true).'</pre>';}