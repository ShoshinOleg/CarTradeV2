<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\EngineType;
use app\modules\v1\models\Modification;
use Yii;
 
class EngineTypeController extends ApiController
{
    public function actionIndex()
    {
        return 'tut';
    }

    public function actionAdd() {
        $model = new EngineType();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }

    public function actionByGenBodyYear($generationId, $bodyTypeId, $year) {
        $modifications = Modification::getModifications($generationId, $bodyTypeId, $year)
                            ->all();
        $engineTypes = [];
        foreach($modifications as $modification) {
            if(!in_array($modification->engine->engineType->id, $engineTypes)) {
                $engineTypes[] = $modification->engine->engineType->id;
            }
        }
        return EngineType::findAll($engineTypes);
    }
}