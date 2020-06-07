<?php

/**
 * @var \yii\data\ActiveDataProvider $dataProvider
 */

if ($dataProvider->getCount() > 0) {
    echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_category_item',
        'itemOptions' => ['tag' => null],
        'options' => ['class' => 'list-group'],
    ]);
}

