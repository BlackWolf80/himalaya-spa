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


class ServiceWidget extends Widget{
    public $type;
    public $id;

    public function init(){
        parent::init();
    }

    public function run()
    {
//        if(!isset($this->id)){echo 'error: ID is undefined'; die;}

        switch ($this->type){
            case 'group':
                if(isset($this->id)){
                    $group = HiCategory::find()->with(['products'])->where(['id'=>$this->id])->andWhere(['status'=> 1])->one();
                    $products = $group->products;

                    return $this->render('service',compact('group','products'));
                }

                break;

            case 'service':
                $groups = HiCategory::find()->with(['products'])->Where(['status'=> 1])->all();
                return $this->render('groups',compact('groups'));
                break;
        }

    }


}