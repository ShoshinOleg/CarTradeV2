<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "Engine".
 *
 * @property int $id
 * @property string $name Название
 * @property float $volume Объем
 * @property int|null $engineTypeId Тип двигателя
 * @property int|null $power Мощность
 * @property string|null $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 *
 * @property EngineType $engineType
 * @property Modification[] $modifications
 */
class Engine extends \app\modules\v1\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Engine';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'volume'], 'required'],
            [['volume'], 'number'],
            [['engineTypeId', 'power'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['engineTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => EngineType::className(), 'targetAttribute' => ['engineTypeId' => 'id']],
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
            'volume' => 'Объем',
            'engineTypeId' => 'Тип двигателя',
            'power' => 'Мощность',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }

    /**
     * Gets query for [[EngineType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEngineType()
    {
        return $this->hasOne(EngineType::className(), ['id' => 'engineTypeId']);
    }

    /**
     * Gets query for [[Modifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifications()
    {
        return $this->hasMany(Modification::className(), ['engineId' => 'id']);
    }

    public function toArray(array $fields = [], array $expand = [], $recursive = true) {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'volume' => $this->volume,
            'engineType' => $this->engineType,
            'power' => $this->power,
        ];
    }
}
