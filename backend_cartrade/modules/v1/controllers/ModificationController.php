<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Modification;
use Yii;
 
class ModificationController extends ApiController
{
    public function actionIndex()
    {

    }

    public function actionAdd() {
        $model = new Modification();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}