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
use yii\helpers\Html;
use yii\helpers\Url;


class FooterWidget extends Widget{

    public $view;

    public function init(){
        parent::init();
    }

    public function run()
    {
        switch ($this->view){
            case '1':
                $data=[
                    '© 2018 Салон Spa<br />',
                    'Краснодар <br />',
                    '+7 (988) 240-08-62<br />',
                    '+7 (988) 240-08-63<br />',
                    '<em><span data-redactor-tag="span" style="color: rgb(102, 102, 102);">С любовью Гималаи SPA...</span></em>',
                ];
                break;
            case '2':
                $data=[
                    Html::a('Контакты',Url::to('contacts')).'<br />',
                    Html::a('Отзывы',Url::to('feedback')).'<br />',
                    Html::a('Галлерея',Url::to('gallery')).'<br />',
                    Html::a('Спа этикет',Url::to('etiket')).'<br />',
//                    Html::a('Оплата',Url::to('informacia')).'<br />',
                    Html::a('Пользовательское соглашение',Url::to('agreement')).'<br />',

                ];


                break;
            case '3':
                $groups=HiCategory::find()->all();
                foreach ($groups as $item){
                    $data[]= Html::a($item['name'],Url::to(['service','id'=>$item['id']])).'<br />';

                }

                break;
            case '4':
                $data=[
                    Html::a('Сертификаты и абонементы',Url::to('certificates')).'<br />',
                    Html::a('Акции и скидки на массаж и спа',Url::to('stok')).'<br />',
                ];
                break;
        }
        foreach ($data as $item){echo $item;}
    }


}