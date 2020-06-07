<?php

namespace api\models;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property int $enabled
 *
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['enabled', 'default', 'value' => 0],
            [['title'], 'required'],
            [['enabled'], 'integer'],
            [['slug', 'title'], 'string', 'max' => 255],
            [['slug'], 'unique'],
        ];
    }
}
