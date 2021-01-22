<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "Generation".
 *
 * @property int $id
 * @property string $name Название
 * @property int|null $modelId Модель
 * @property string $startManufacturing Начало производства
 * @property string|null $endManufacturing Конец производства
 * @property string|null $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 *
 * @property Combination[] $combinations
 * @property Model $model
 */
class Generation extends \app\modules\v1\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Generation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'startManufacturing'], 'required'],
            [['modelId'], 'integer'],
            [['startManufacturing', 'endManufacturing', 'createdAt', 'updatedAt'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['modelId'], 'exist', 'skipOnError' => true, 'targetClass' => Model::className(), 'targetAttribute' => ['modelId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'modelId' => 'Модель',
            'startManufacturing' => 'Начало производства',
            'endManufacturing' => 'Конец производства',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }

    /**
     * Gets query for [[Combinations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCombinations()
    {
        return $this->hasMany(Combination::className(), ['generationId' => 'id']);
    }

    /**
     * Gets query for [[Model]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModel()
    {
        return $this->hasOne(Model::className(), ['id' => 'modelId']);
    }

    public function toArray(array $fields = [], array $expand = [], $recursive = true) {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'model' => $this->model,
            'startManufacturing' => $this->startManufacturing,
            'endManufacturing' => $this->endManufacturing,
        ];
    }
}
