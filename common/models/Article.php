<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Article".
 *
 * @property integer $ArticleID
 * @property integer $ChanelID
 * @property integer $MasterID
 * @property string $Titler
 * @property string $Content
 * @property integer $FavoriteNumber
 * @property string $AddTime
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ChanelID', 'MasterID', 'FavoriteNumber'], 'integer'],
            [['Titler', 'Content'], 'required'],
            [['Content'], 'string'],
            [['AddTime'], 'safe'],
            [['Titler'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ArticleID' => 'Article ID',
            'ChanelID' => 'Chanel ID',
            'MasterID' => 'Master ID',
            'Titler' => 'Titler',
            'Content' => 'Content',
            'FavoriteNumber' => 'Favorite Number',
            'AddTime' => 'Add Time',
        ];
    }
}
