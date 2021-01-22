<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Color;
use Yii;
 
class ColorController extends ApiController
{
    public function actionIndex()
    {

    }

    public function actionAdd() {
        $model = new Color();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}
