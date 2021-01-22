<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\EngineType;
use Yii;
 
class EngineTypeController extends ApiController
{
    public function actionIndex()
    {

    }

    public function actionAdd() {
        $model = new EngineType();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}