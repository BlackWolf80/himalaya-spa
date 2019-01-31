<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hi_products".
 *
 * @property int $id
 * @property string $name
 * @property int $period
 * @property int $price
 * @property int $status
 * @property int $category_id
 * @property int $hit
 * @property string $desctription
 * @property string $image
 */
class HiProducts extends \yii\db\ActiveRecord
{
    public $nameModel = 'Продукты';
    public $dir;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hi_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'image'], 'required'],
            [['period', 'price', 'status', 'category_id', 'hit'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['image'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название ',
            'period' => 'Длительность',
            'price' => 'Стоимость',
            'status' => 'Статус',
            'category_id' => 'Категория',
            'hit' => 'Хит',
            'description' => 'Описание',
            'image' => 'Изображение',
        ];
    }


}
