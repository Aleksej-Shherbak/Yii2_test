<?php

namespace api\models\search;

use yii\base\Model;

/**
 * This is the model class for table "{{%tag}}".
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 *
 */
class TagSearch extends Model
{
    public $id;
    public $slug;
    public $title;

    public function rules()
    {
        return [
            [['slug', 'title'], 'string', 'max' => 255],
            ['id', 'integer'],
        ];
    }

}
