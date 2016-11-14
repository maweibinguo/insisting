<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Chanel".
 *
 * @property integer $ChanelID
 * @property string $ChanelName
 * @property integer $ParentID
 * @property string $AddTime
 */
class Chanel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Chanel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ParentID'], 'integer'],
            [['AddTime'], 'safe'],
            [['ChanelName'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ChanelID' => 'Chanel ID',
            'ChanelName' => 'Chanel Name',
            'ParentID' => 'Parent ID',
            'AddTime' => 'Add Time',
        ];
    }
}
