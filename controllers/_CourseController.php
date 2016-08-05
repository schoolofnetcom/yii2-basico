<?php

namespace app\controllers;

use app\models\Course;
use yii\web\NotFoundHttpException;

class CourseController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $courses = Course::find()->all();
        return $this->render('index', [
            'courses' => $courses
        ]);
    }

    public function actionCreate()
    {
        $request = \Yii::$app->request;
        if ($request->isPost) {
            $model = new Course();
            $model->attributes = $request->post();
            $model->save();
            return $this->redirect(['course/index']);
        }
        return $this->render('create');
    }

    public function actionUpdate($id)
    {
        $model = Course::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException("Página não encontrada!!");
        }
        $request = \Yii::$app->request;
        if ($request->isPost) {
            $model->attributes = $request->post();
            $model->save();
            return $this->redirect(['course/index']);
        }
        return $this->render('update', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $model = Course::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException("Página não encontrada!!");
        }
        $model->delete();
        return $this->redirect(['course/index']);
    }

}
