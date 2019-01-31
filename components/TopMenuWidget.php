<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 06.10.17
 * Time: 0:51
 */

namespace app\components;
use app\models\HiTopMenu;
use yii\base\Widget;


class TopMenuWidget extends Widget{
    public $type = 'desk';

    public function init(){
        parent::init();
    }

    public function run(){

        $menu=HiTopMenu::find()->where(['status'=>1])->all();

        switch ($this->type){
            case 'desk':
                return $this->render('top_menu',compact('menu'));
                break;
            case 'mobile':
                return $this->render('top_menu_mob',compact('menu'));
                break;

        }

    }

}