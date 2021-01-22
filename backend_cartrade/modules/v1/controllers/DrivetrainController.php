<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Drivetrain;
use Yii;
 
class DrivetrainController extends ApiController
{
    public function actionIndex()
    {

    }

    public function actionAdd() {
        $model = new Drivetrain();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}