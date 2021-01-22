<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Company;
use Yii;
 
class CompanyController extends ApiController
{
    public function actionIndex()
    {
        return Company::find()->all();
    }

    public function actionAdd() {
        $model = new Company();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }

    public function actionModels($id) {
        return Company::findOne($id)->getModels()->all();
    }
}
