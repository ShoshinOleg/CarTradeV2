<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Ad;
use Yii;
 
class AdController extends ApiController
{
    public function actionIndex()
    {

    }

    public function actionAdd() {
        $model = new Ad();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}
