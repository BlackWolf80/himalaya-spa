<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hi_feedback".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 */
class HiFeedback extends \yii\db\ActiveRecord
{
    public $nameModel = 'Отзывы';
    public $verifyCode;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hi_feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'body'], 'required'],
            [['name', 'email'], 'string', 'max' => 50],
            [['body'], 'string', 'max' => 500],
            ['verifyCode', 'captcha'],
            ['email', 'email'],
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
            'email' => 'E-mail',
            'body' => 'Отзыв',
            'verifyCode' => 'Проверочный код',
            'status' => 'Статус',
        ];
    }
}
