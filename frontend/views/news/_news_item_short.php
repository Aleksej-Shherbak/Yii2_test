<?php

use yii\helpers\Html;

$description = \yii\helpers\StringHelper::truncateWords(strip_tags($model->description), 20);

echo Html::a(
  Html::encode($model->title) . Html::tag('br') . Html::tag('small',
      $description, ['class' => 'text-muted']),
    ['news/view', 'id' => $model->id],
    ['class' => 'list-group-item', 'style' => ['margin-bottom' => '10px']]
);