<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 06.10.17
 * Time: 0:51
 */

namespace app\components;
use app\models\HiCategory;
use app\models\HiProducts;
use yii\base\Widget;


class FormWidget extends Widget{

    public $type;

    public function init(){
        parent::init();
    }

    public function run()
    {


         return $this->render('form',['type'=> $this->type]);
    }


}