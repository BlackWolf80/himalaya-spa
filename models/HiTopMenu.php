<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hi_top_menu".
 *
 * @property int $id
 * @property string $name
 * @property string $link
 * @property string $title
 * @property int $status
 */
class HiTopMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hi_top_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link', 'title'], 'required'],
            [['status'], 'integer'],
            [['name', 'link'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'link' => 'Link',
            'title' => 'Title',
            'status' => 'Status',
        ];
    }
}
