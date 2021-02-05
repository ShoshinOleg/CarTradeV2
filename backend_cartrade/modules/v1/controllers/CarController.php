<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Ad;

class CarController extends ApiController
{
    public function actionIndex()
    {
        //return 'list';
        $ad = Ad::find()
            ->orderBy(['createdAt' => SORT_DESC])
            ->all();
        return $ad;
    }

    public function actionCompanyAdd() {
        return 'company-add';
    }

    public function actionList($id) {
        $ad = Ad::find()
            ->where(['id' => $id])
            ->one();
        return $ad;
    }

    public function actionImagesNames() {
        
    }
}
