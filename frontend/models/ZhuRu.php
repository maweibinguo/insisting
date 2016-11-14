<?php
namespace app\models;  
  
use yii\base\Object;  
use yii\db\Connection;  
use yii\di\Container;  
  
// 定义接口  
interface UserFinderInterface {  
  
    function findUser();  
}  
  
// 定义类，实现接口  
class UserFinder extends Object implements UserFinderInterface {  
  
    public $db;  
  
    // 从构造函数看，这个类依赖于 Connection  
    public function __construct(Connection $db, $config = []) {  
        $this->db = $db;  
        parent::__construct($config);  
    }  
  
    public function findUser() {  
          
    }  
  
}  
  
class UserLister extends Object {  
  
    public $finder;  
  
    // 从构造函数看，这个类依赖于 UserFinderInterface接口  
    public function __construct(UserFinderInterface $finder, $config = []) {  
        $this->finder = $finder;  
        parent::__construct($config);  
    }  
  
} 
?>