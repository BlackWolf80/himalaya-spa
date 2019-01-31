<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hi_category".
 *
 * @property int $id
 * @property string $name
 * @property int $status
 * @property string $description
 */
class HiCategory extends \yii\db\ActiveRecord
{
    public $nameModel = 'Категории';
    public $dir;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hi_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
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
            'name' => 'Название',
            'status' => 'Статус',
            'description' => 'Описание',
            'image' => 'Изображение',
        ];
    }

    public function getProducts()
    {
        return $this->hasMany(HiProducts::className(),['category_id'=>'id']);

    }

}
