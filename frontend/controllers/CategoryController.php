<?php

namespace frontend\controllers;


use frontend\models\Category;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CategoryController extends Controller
{
    public function actionIndex(): string
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Category::find()->innerJoinWith('news'),
            'pagination' => [
                'pageSize' => 20
            ]
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionView(int $id)
    {
        $category = Category::findOne($id);

        $newsDataProvider = new ActiveDataProvider([
            'query' => $category->getNews(),
            'pagination' => false
        ]);

        if ($category === null) {
            throw new NotFoundHttpException("Category not found");
        }

        return $this->render('view', [
            'model' => $category,
            'newsDataProvider' => $newsDataProvider
        ]);
    }
}