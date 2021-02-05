<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\BodyType;
use app\modules\v1\models\Model;
use Yii;
 
class BodyTypeController extends ApiController
{
    public function actionIndex()
    {

    }

    public function actionAdd() {
        $model = new BodyType();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }

    //Подумать, могу ли я это сделать проще(С помощью ActiveRecord и groupBy)
    public function actionByModelYear($modelId, $year) {
        /*$generations = Model::findOne($modelId)->getGenerations()
            ->where(['<=', 'startManufacturing', $year])
            ->andWhere(['>=', 'endManufacturing', $year])
            ->joinWith('combinations')
            ->all();
        BodyType::find()
            ->joinWith('combinations')
            ->all();
        */
        $generations = Model::findOne($modelId)->getGenerations()
            ->where(['<=', 'startManufacturing', $year])
            ->andWhere(['>=', 'endManufacturing', $year])
            ->all();
        $bodyTypes = [];
        foreach ($generations as $generation) {
            foreach ($generation->combinations as $combination) {
                if(!in_array($combination->bodyTypeId, $bodyTypes)) {
                    $bodyTypes[] = $combination->bodyTypeId;
                }
            }
        }
        return BodyType::findAll($bodyTypes);
    }


}