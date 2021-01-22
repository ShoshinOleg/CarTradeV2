<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Engine;
use Yii;
 
class EngineController extends ApiController
{
    public function actionIndex()
    {

    }

    public function actionAdd() {
        $model = new Engine();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}