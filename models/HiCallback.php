<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hi_callback".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $service
 * @property string $date
 * @property int $status
 */
class HiCallback extends \yii\db\ActiveRecord
{
    public $verifyCode;
    public $nameModel = 'Онлайн заказы';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hi_callback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'service'], 'required'],
            [['date'], 'safe'],
            [['status'], 'integer'],
            [['name', 'phone', 'service'], 'string', 'max' => 150],
//            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'service' => 'Услуга',
            'date' => 'Дата',
            'status' => 'Статус',
            'verifyCode' => 'проверочный код',
        ];
    }
}
