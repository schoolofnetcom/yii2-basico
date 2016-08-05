<?php

namespace app\controllers;

use app\models\Course;

class TesteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $courses = Course::find()->all();
        foreach ($courses as $course){
            echo "{$course->id} - {$course->name} - {$course->hours}<br/>";
        }
        die();
    }

    public function actionMaisParametros($id,$name){
        echo "$id - $name";die();
    }

}
