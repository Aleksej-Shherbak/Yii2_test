<?php

namespace frontend\controllers;


use frontend\models\Tag;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TagController extends Controller
{
    public function actionIndex(): string
    {
        $model = Tag::find();

        return $this->render('index', [
           'model' => $model
        ]);
    }

    public function actionView(int $id)
    {
        $model = Tag::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException("Tag not found");
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $model->getNews(),
            'pagination' => false
        ]);

        return $this->render('view', [
           'model' => $model,
           'dataProvider' => $dataProvider
        ]);
    }
}