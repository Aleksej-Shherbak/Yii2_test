<?php

namespace backend\helpers;

use backend\models\Category;
use yii\helpers\ArrayHelper;

class CategoryHelper
{
    public static function getAvailableCategories()
    {
        return ArrayHelper::map(Category::find()->all(), 'id', 'title');
    }
}