<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Modification;
use app\modules\v1\models\Combination;
use app\modules\v1\models\Generation;
use Yii;
 
class ModificationController extends ApiController
{
    public function actionIndex($generationId, $bodyTypeId, $year, $engineTypeId, $drivetrainId)
    {
        return Modification::getModifications($generationId, $bodyTypeId, $year, $engineTypeId, $drivetrainId) -> all();
        /*$modifications = Modification::find()
        ->where(['<=', 'startManufacturing', $year])
        ->andWhere(['>=', 'endManufacturing', $year])
        ->joinWith('combinations')
        ->andWhere(['generationId' => $generationId])
        ->andWhere(['bodyTypeId' => $bodyTypeId])
        ->all();
    return $modifications;*/
    }

    public function actionAdd() {
        $model = new Modification();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}