<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Combination;
use Yii;
 
class CombinationController extends ApiController
{
    public function actionIndex()
    {

    }

    public function actionAdd() {
        $model = new Combination();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}
