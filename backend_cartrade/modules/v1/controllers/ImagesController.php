<?php

namespace app\modules\v1\controllers;
use app\modules\v1\models\AdImage;
use Yii;
 
class ImagesController extends ApiController
{
    public function actionIndex($id)
    {
        $adImage = AdImage::findOne($id);
        $picPath = '/app/assets/images/ad/' . $adImage->adId . '/' . $adImage->picNumber.'.webp';
        return \Yii::$app->getResponse()->sendFile($picPath, null, [
            'mimeType' => 'image/png',
            'inline' => true,
        ]);
    }
    /*
    public function actionIndex()
    {
        return \Yii::$app->getResponse()->sendFile('/app/logo.png', null, [
            'mimeType' => 'image/png',
            'inline' => true,
        ]);
    }*/

    public function actionGetListImagesByAd($adId)
    {
        return AdImage::getImagesByAd($adId);
    }
}