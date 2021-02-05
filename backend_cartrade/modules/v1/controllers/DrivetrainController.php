<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\BodyType;
use app\modules\v1\models\Combination;
use app\modules\v1\models\Drivetrain;
use app\modules\v1\models\Modification;
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

    public function actionByGenBodyYearEngineType($generationId, $bodyTypeId, $year, $engineTypeId) {
        $modifications = Modification::getModifications($generationId, $bodyTypeId, $year, $engineTypeId)
                            ->all();
        $drivetrains = [];
        foreach($modifications as $modification) {
            if(!in_array($modification->drivetrain->id, $drivetrains)) {
                $drivetrains[] = $modification->drivetrain->id;
            }
        }
        return Drivetrain::findAll($drivetrains);
    }
}