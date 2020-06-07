<?php

/**
 * @var yii\data\ActiveDataProvider $dataProvider
 */

echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_news_item_short',
    'itemOptions' => ['tag' => null],
    'options' => ['class' => 'list-group'],
]);