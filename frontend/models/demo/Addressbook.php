<?php

namespace frontend\models\demo;

use Yii;

/**
 * This is the model class for table "addressbook".
 *
 * @property int $id
 * @property string $name 姓名
 * @property string $age 年龄
 * @property string $sex 性别
 * @property string $birthday 生日
 * @property string $holly 爱好
 * @property string $email 邮箱
 * @property string $address 地址
 * @property int $phone 手机
 * @property int $qq qq号码
 * @property int $adddatetime 添加时间
 * @property int $updatetime 更新时间
 * @property string $info 其他信息
 */
class Addressbook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addressbook';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'sex', 'birthday', 'email', 'info','holly'], 'required'],
            [ ['qq'], 'integer'],
            ['name','match','pattern'=>'/^[(\x{4E00}-\x{9FA5})a-zA-Z]+[(\x{4E00}-\x{9FA5})a-zA-Z_\d]*$/u','message'=>'用户名由字母，汉字，数字，下划线组成，且不能以数字和下划线开头!'],
            ['phone','match','pattern'=>'/^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0-9]))\\d{8}$/','message'=>'请输入正确的11位电话号码！'],
            ['phone','string'],
            ['name','string','min'=>2,'max'=>16],
            [['info'], 'string','min'=>2,'max'=>1000],
            [ ['birthday', 'email'], 'string', 'max' => 255],
            ['email','email'],
            [['age'], 'integer', 'max' => 200],
            [['address'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'name' => '姓名',
            'age' => '年龄',
            'sex' => '性别',
            'birthday' => '生日',
            'holly' => '爱好',
            'email' => '邮箱',
            'address' => '地址',
            'phone' => '手机',
            'qq' => 'qq号码',
            'adddatetime' => '添加时间',
            'updatetime' => '更新时间',
            'info' => '其他信息',
        ];
    }
}
