<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "Combination".
 *
 * @property int $id
 * @property int|null $generationId Поколение
 * @property int|null $bodyTypeId Тип кузова
 * @property int|null $modificationId Модификация
 * @property string|null $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 *
 * @property Ad[] $ads
 * @property BodyType $bodyType
 * @property Generation $generation
 * @property Modification $modification
 */
class Combination extends \app\modules\v1\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Combination';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['generationId', 'bodyTypeId', 'modificationId'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['bodyTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => BodyType::className(), 'targetAttribute' => ['bodyTypeId' => 'id']],
            [['generationId'], 'exist', 'skipOnError' => true, 'targetClass' => Generation::className(), 'targetAttribute' => ['generationId' => 'id']],
            [['modificationId'], 'exist', 'skipOnError' => true, 'targetClass' => Modification::className(), 'targetAttribute' => ['modificationId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'generationId' => 'Поколение',
            'bodyTypeId' => 'Тип кузова',
            'modificationId' => 'Модификация',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }

    /**
     * Gets query for [[Ads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAds()
    {
        return $this->hasMany(Ad::className(), ['combinationId' => 'id']);
    }

    /**
     * Gets query for [[BodyType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBodyType()
    {
        return $this->hasOne(BodyType::className(), ['id' => 'bodyTypeId']);
    }

    /**
     * Gets query for [[Generation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGeneration()
    {
        return $this->hasOne(Generation::className(), ['id' => 'generationId']);
    }

    /**
     * Gets query for [[Modification]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModification()
    {
        return $this->hasOne(Modification::className(), ['id' => 'modificationId']);
    }

    public function toArray(array $fields = [], array $expand = [], $recursive = true) {
        return [
            'id' => $this->id,
            'generation' => $this->generation,
            'bodyType' => $this->bodyType,
            'modification' => $this->modification,
        ];
    }

    public function getModifications($generationId, $bodyTypeId) {
        $modifications = Modification::find()
            ->joinWith('combinations')
            ->where(['generationId' => $generationId])
            ->andWhere(['bodyTypeId' => $bodyTypeId])
            ->all();
        return $modifications;
    }
}
