<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "Ad".
 *
 * @property int $id
 * @property int|null $combinationId Комбинация
 * @property string $year Год
 * @property int $price Цена
 * @property int $odometer Пробег
 * @property int|null $colorId Цвет
 * @property int $countOwners Количество владельцев
 * @property string|null $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 *
 * @property Color $color
 * @property Combination $combination
 */
class Ad extends \app\modules\v1\models\BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['combinationId', 'price', 'odometer', 'colorId', 'countOwners'], 'integer'],
            [['year', 'price', 'odometer', 'countOwners'], 'required'],
            [['year', 'createdAt', 'updatedAt'], 'safe'],
            [['colorId'], 'exist', 'skipOnError' => true, 'targetClass' => Color::className(), 'targetAttribute' => ['colorId' => 'id']],
            [['combinationId'], 'exist', 'skipOnError' => true, 'targetClass' => Combination::className(), 'targetAttribute' => ['combinationId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'combinationId' => 'Комбинация',
            'year' => 'Год',
            'price' => 'Цена',
            'odometer' => 'Пробег',
            'colorId' => 'Цвет',
            'countOwners' => 'Количество владельцев',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }

    /**
     * Gets query for [[Color]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::className(), ['id' => 'colorId']);
    }

    /**
     * Gets query for [[Combination]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCombination()
    {
        return $this->hasOne(Combination::className(), ['id' => 'combinationId']);
    }

    public function toArray(array $fields = [], array $expand = [], $recursive = true) {

        return [
            'id' => $this->id,
            'name' => $this->combination->generation->model->company->name . ' ' .
                        $this->combination->generation->model->name . ' ' . 
                        $this->combination->modification->name,
            'combination' => $this->combination,
            'year' => $this->year,
            'price' => $this->price,
            'formattedPrice' => number_format($this->price, 0, '.', ' ') . ' ₽',
            'odometer' => $this->odometer,
            'color' => $this->color,
            'countOwners' => $this->countOwners,
            'createdAt' => $this->createdAt,
        ];
    }
}
