<?php

namespace app\controllers;

class SonTesteController extends \yii\web\Controller
{
    public function actionIndex($id=500)
    {
        return $this->render('index');
    }

    public function actionTeste(){
        echo "ação teste funcionando";die();
    }

    public function actionTesteComposto(){
        echo "ação teste composto funcionando";die();
    }

}
