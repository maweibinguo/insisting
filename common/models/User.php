<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property integer $UserID
 * @property string $UserName
 * @property integer $UserStatus
 * @property string $UserAvatar
 * @property string $AddTime
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserName', 'UserAvatar'], 'required'],
            [['UserStatus'], 'integer'],
            [['AddTime'], 'safe'],
            [['UserName'], 'string', 'max' => 32],
            [['UserAvatar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UserID' => 'User ID',
            'UserName' => 'User Name',
            'UserStatus' => 'User Status',
            'UserAvatar' => 'User Avatar',
            'AddTime' => 'Add Time',
        ];
    }
}
