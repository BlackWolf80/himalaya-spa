<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 06.10.17
 * Time: 0:51
 */

namespace app\components;
use app\models\HiFeedback;
use yii\base\Widget;


class IndexWidget extends Widget{

    public $view;

    public function init(){
        parent::init();
    }

    public function run()
    {
                switch ($this->view){
                    case 'carousel':
                        return $this->render('carousel');
                        break;
                    case 'counters':
                        return $this->render('counters');
                        break;
                    case 'best':
                        return $this->render('best');
                        break;
                    case 'cover':
                        return $this->render('cover');
                        break;
                    case 'cover-boa':
                        return $this->render('cover-boa');
                        break;
                    case 'comments':
                        $data= HiFeedback::find()->where(['status'=>1])->all();

                        $comments= array_splice($data, count($data) - 4);
                        return $this->render('comments',compact('comments'));
                        break;
                }





    }


}