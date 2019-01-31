<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hi_stok".
 *
 * @property int $id
 * @property string $discount
 * @property string $description
 * @property string $date_start
 * @property string $date_end
 */
class HiStok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hi_stok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['discount'], 'required'],
            [['description'], 'string'],
            [['date_start', 'date_end'], 'safe'],
            [['discount'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'discount' => 'Discount',
            'description' => 'Description',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
        ];
    }
}
