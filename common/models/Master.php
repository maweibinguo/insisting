<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Master".
 *
 * @property integer $MasterID
 * @property string $MasterName
 * @property string $Password
 * @property string $Salt
 * @property string $AddTime
 */
class Master extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Password', 'MasterName'], 'required', 'message' => '请填写密码'],
            [['MasterName'], 'match', 'pattern' => '#^[a-zA-Z0-9_]{4,32}$#', 'message' => '博主名称必须是字母、数字、下划线（长短4-32）！'],
            ['MasterName', 'unique' , 'message' => '该用户名已经存在！'],
            [['Password'], 'string', 'length' => [8,16], 'message' => '']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MasterID' => 'Master ID',
            'MasterName' => 'Master Name',
            'Password' => 'Password',
            'Salt' => 'Salt',
            'AddTime' => 'Add Time',
        ];
    }

    /**
     * 创建博主用户
     *
     * @access public
     * @param array $masterItem 博主数据
     * @return int $result 添加结果
     */
    public function createMasterUser($masterItem = array())
    {
        /* 初始化返回结果 */
        $result = 0;

        /* 开始添加 */
        if($masterItem) {
            $this->attributes();
            //salt盐值
            $salt = mt_rand(0, 99999999);
            $salt = strlen($salt) == 8 ? $salt : str_pad($salt, 8, '0', STR_PAD_LEFT);
            $masterItem['Salt'] = $salt;

            //密码
            $password = md5($salt . $masterItem['Password']);
            $masterItem['Password'] = $password;

            //入库时间
            $addTime = date('Y-m-d H:i:s');
            $masterItem['AddTime'] = $addTime;
            $data[$formName] = $masterItem;

            //添加
            $this->load($data);
            $result = $this->save();
        }

        /* 返回最终结果 */
        return $result;
    }
}
