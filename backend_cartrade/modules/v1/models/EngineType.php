<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "EngineType".
 *
 * @property int $id
 * @property string $name Название
 * @property string|null $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 *
 * @property Engine[] $engines
 */
class EngineType extends \app\modules\v1\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'EngineType';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name'], 'string', 'max' => 100],
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
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }

    /**
     * Gets query for [[Engines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEngines()
    {
        return $this->hasMany(Engine::className(), ['engineTypeId' => 'id']);
    }

    public function toArray(array $fields = [], array $expand = [], $recursive = true) {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
