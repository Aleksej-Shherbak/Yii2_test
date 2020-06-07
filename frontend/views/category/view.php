<?php

/**
 * @var \yii\data\ActiveDataProvider $newsDataProvider
 */

use yii\helpers\Html;
use yii\widgets\ListView;

if ($newsDataProvider->getCount() > 0) {
    echo Html::tag('h3', 'List of news related to the category');

    echo ListView::widget([
        'dataProvider' => $newsDataProvider,
        'itemView' => '//news/_news_item_short',
        'options' => ['tag' => 'list-group'],
        'itemOptions' => ['tag' => null]
    ]);
}