<?php

/**
 * @var \yii\db\ActiveQuery $model
 */

use yii\helpers\Html;

if ($model->count() > 0) {
    /**
     * @var \frontend\models\Tag $tag
     */
    foreach ($model->each() as $tag) {
        echo Html::a(
            $tag->title,
            ['tag/view', 'id' => $tag->id],
            ['class' => 'btn btn-default']
        ), ' ';
    }
}