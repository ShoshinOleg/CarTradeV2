<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "AdImage".
 *
 * @property int $id
 * @property int|null $adId Объявление
 * @property int|null $picNumber Номер картинки в объявлении
 *
 * @property Ad $ad
 */
class AdImage extends \app\modules\v1\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'AdImage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adId', 'picNumber'], 'integer'],
            [['adId'], 'exist', 'skipOnError' => true, 'targetClass' => Ad::className(), 'targetAttribute' => ['adId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adId' => 'Объявление',
            'picNumber' => 'Номер картинки в объявлении',
        ];
    }

    /**
     * Gets query for [[Ad]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAd()
    {
        return $this->hasOne(Ad::className(), ['id' => 'adId']);
    }

    public static function getImagesByAd($adId) {
        return AdImage::find()
                    ->where(['adId' => $adId])
                    ->all();
    }
}
