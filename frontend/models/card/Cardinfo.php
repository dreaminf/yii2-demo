<?php

namespace frontend\models\card;

use Yii;

/**
 * This is the model class for table "cardinfo".
 *
 * @property string $rand_code 随机码
 * @property string $user_name
 * @property string $sex
 * @property string $address
 * @property string $birth_day
 * @property string $id_card
 */
class Cardinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cardinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rand_code'], 'required'],
            [['rand_code'], 'string', 'max' => 32],
            [['user_name'], 'string', 'max' => 255],
            [['sex'], 'string', 'max' => 4],
            [['address'], 'string', 'max' => 500],
            [['birth_day'], 'string', 'max' => 40],
            [['id_card'], 'string', 'max' => 18],
            [['rand_code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rand_code' => 'Rand Code',
            'user_name' => 'User Name',
            'sex' => 'Sex',
            'address' => 'Address',
            'birth_day' => 'Birth Day',
            'id_card' => 'Id Card',
        ];
    }
}
