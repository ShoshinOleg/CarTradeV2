<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "Color".
 *
 * @property int $id
 * @property string|null $name Название
 * @property string|null $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 */
class Color extends \app\modules\v1\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['createdAt', 'updatedAt'], 'safe'],
            [['name'], 'string', 'max' => 50],
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

    public function toArray(array $fields = [], array $expand = [], $recursive = true) {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
