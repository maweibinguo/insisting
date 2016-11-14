<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Comment".
 *
 * @property integer $CommentID
 * @property integer $ArticleID
 * @property integer $UserID
 * @property string $Comment
 * @property string $AddTime
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ArticleID', 'UserID'], 'integer'],
            [['Comment'], 'required'],
            [['Comment'], 'string'],
            [['AddTime'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CommentID' => 'Comment ID',
            'ArticleID' => 'Article ID',
            'UserID' => 'User ID',
            'Comment' => 'Comment',
            'AddTime' => 'Add Time',
        ];
    }
}
