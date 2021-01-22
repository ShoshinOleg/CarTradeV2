<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\Model;
use app\modules\v1\models\Generation;
use app\modules\v1\models\Combination;
use app\modules\v1\models\BodyType;

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

    public function actionYears($id) {
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

    //Подумать, могу ли я это сделать проще(С помощью ActiveRecord и groupBy)
    public function actionBody($modelId, $year) {
        $generations = Model::findOne($modelId)->getGenerations()
            ->where(['<=', 'startManufacturing', $year])
            ->andWhere(['>=', 'endManufacturing', $year])
            ->all();
        $bodyTypes = [];
        foreach ($generations as $generation) {
            //$combinations = $generation->getCombinations();
            $combinations = Combination::findAll(['generationId' => $generation->id]);
            foreach ($combinations as $combination) {
                if(!in_array($combination->bodyTypeId, $bodyTypes)) {
                    $bodyTypes[] = $combination->bodyTypeId;
                }
            }
        }
        return BodyType::findAll($bodyTypes);
    }

    
}