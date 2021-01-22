<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Generation;
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

    public function actionModelYearBodyType($modelId, $year, $bodyTypeId ) {
        /*
        $generations = Model::findOne($modelId)->getGenerations()
            ->where(['<=', 'startManufacturing', $year])
            ->andWhere(['>=', 'endManufacturing', $year])
            ->all();
        $bodyTypes = [];
        foreach ($generations as $generation) {
            $combinations = Combination::findAll(['generationId' => $generation->id]);
            foreach ($combinations as $combination) {
                if(!in_array($combination->bodyTypeId, $bodyTypes)) {
                    $bodyTypes[] = $combination->bodyTypeId;
                }
            }
        }
        return BodyType::findAll($bodyTypes);
        */
    }
}