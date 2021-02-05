<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Model;
use app\modules\v1\models\Generation;
use app\modules\v1\models\Combination;
use app\modules\v1\models\BodyType;
use app\modules\v1\models\Company;

use Yii;
 
class ModelController extends ApiController
{
    public function actionIndex()
    {

    }

    public function actionAdd() {
        $model = new Model();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }

    public function actionGetManufacturingYears($id) {
        $generations = Model::findOne($id)->getGenerations()->all();
        $years = [];
        foreach ($generations as $generation) {
            $startYear = $generation->startManufacturing;
            $endYear = $generation->endManufacturing;
            for($i=$startYear; $i < $endYear; $i++) {
                if(!in_array($i, $years)) {
                    $years[] = $i;
                }
            }
        }
        usort($years, function($a, $b){
            return ($a - $b);
        });
        return $years;
    }

    public function actionByCompany($id) {
        return Company::findOne($id)->models;
    }

    
}