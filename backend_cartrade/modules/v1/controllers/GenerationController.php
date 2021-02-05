<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Generation;
use app\modules\v1\models\Model;
use app\modules\v1\models\Combination;
use app\modules\v1\models\BodyType;
use Yii;
 
class GenerationController extends ApiController
{
    public function actionIndex()
    {

    }

    public function actionAdd() {
        $model = new Generation();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }

    public function actionByModelYearBody($modelId, $year, $bodyTypeId ) {
        $generations = Model::findOne($modelId)->getGenerations()
            ->where(['<=', 'startManufacturing', $year])
            ->andWhere(['>=', 'endManufacturing', $year])
            ->joinWith('combinations')
            ->andWhere(['bodyTypeId' => $bodyTypeId])
            ->all();
        return $generations;
    }


}