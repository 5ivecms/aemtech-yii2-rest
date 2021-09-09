<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vacancy".
 *
 * @property int $id
 * @property int $isPublish
 * @property string $title
 * @property string $text
 */
class Vacancy extends \yii\db\ActiveRecord
{
    const IS_PUBLISH = 1;
    const IS_NOT_PUBLISH = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isPublish'], 'boolean'],
            [['title'], 'required'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isPublish' => 'Публикация',
            'title' => 'Название',
            'text' => 'Текст',
        ];
    }
}
