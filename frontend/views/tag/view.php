<?php

/**
 * @var \frontend\models\Tag $model
 * @var \yii\data\ActiveDataProvider $dataProvider
 */

use yii\helpers\Html;
use yii\widgets\ListView;

if ($dataProvider->getCount() > 0) {
    echo Html::tag('h3', 'List of news related to the tag');

    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '//news/_news_item_short',
        'itemOptions' => ['tag' => null],
        'options' => ['class' => 'list-group']
    ]);
}

echo Html::tag('p', Html::a('Go Back', ['tag/index'], ['class' => 'btn btn-default']),
    ['class' => 'text-right']);