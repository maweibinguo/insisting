<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Inspiration".
 *
 * @property integer $InspirationID
 * @property integer $ChanelID
 * @property string $Content
 * @property string $AddTime
 */
class Inspiration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Inspiration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ChanelID'], 'integer'],
            [['Content', 'AddTime'], 'required'],
            [['AddTime'], 'safe'],
            [['Content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'InspirationID' => 'Inspiration ID',
            'ChanelID' => 'Chanel ID',
            'Content' => 'Content',
            'AddTime' => 'Add Time',
        ];
    }
}
