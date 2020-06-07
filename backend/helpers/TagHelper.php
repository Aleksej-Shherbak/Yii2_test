<?php

namespace backend\helpers;

use backend\models\Tag;
use yii\helpers\ArrayHelper;

class TagHelper
{
    public static function getAvailableTags()
    {
        return ArrayHelper::map(Tag::find()->all(), 'title', 'title');
    }
}