<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 06.10.17
 * Time: 0:51
 */

namespace app\components;
use app\models\HiCallback;
use yii\base\Widget;
use Yii;



class FormWidget extends Widget{

    public $type;

    public function init(){
        parent::init();
    }

    public function run()
    {

        if($this->type == null) {

            //форма обратного звонка
            $model = new HiCallback();
            if ($model->load(Yii::$app->request->post())) {

                if ($model->save()) {
                    $post_array = Yii::$app->request->post();
                    $admin_email = Yii::$app->params['adminEmail'];
                    $managerEmail = Yii::$app->params['managerEmail'];

                    $this->mailSend($admin_email, $managerEmail, $post_array, 'Заказ услуги: '
                        . $post_array['HiCallback']['name'] . ' '
                        . $post_array['HiCallback']['phone'], 'service');
                    Yii::$app->session->setFlash('success', 'Спасибо ваше сообщение принято.');
                    Yii::$app->controller->refresh();
                } else {
                    Yii::$app->session->setFlash('error', 'Ошибка ввода');
                    Yii::$app->controller->refresh();
                }
            }

            return $this->render('form',['type'=> $this->type,'model' => $model]);
        }


         return $this->render('form',['type'=> $this->type]);
    }


    public function mailSend($emFrom,$emTo,$model,$subject,$layoutMessage){
        Yii::$app->mailer->compose ($layoutMessage, ['model' => $model])
            ->setFrom ([$emFrom => 'Заказ услуги Гималаи спа']) //от кого
            ->setTo ($emTo)                                              //кому
            ->setSubject ($subject)                                      //заголовок
            ->send ();
    }

}