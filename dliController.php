<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/25
 * Time: 10:20
 */

class dli{
    private $service;//私有的静态属性
    private function __construct()//私有构造方法
    {

    }
    private function __clone()//私有的克隆方法
    {
        // TODO: Implement __clone() method.
    }
    //公有的静态方法
    public static function test(){
        $pdo = new PDO('mysql:host=localhost;dbname=month1;charset=utf8');//连接数据库

    }
    public function create(){
        $pdo = new  PDO('mysql:host=localhost;dbname=month1;charset=utf8');//连接数据库
        $sql = "insert into fruit VALUES (NULL ,NAME ='草莓',TYPE ='2')";
        $res = $pdo->exec($sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    public function select(){
        $pdo = new  PDO('mysql:host=localhost;dbname=month1;charset=utf8');//连接数据库
        $sql = "select * from fruit";
        $res = $pdo->exec($sql);
        if($res){
            return json_encode(['code'=>'200','res'=>$res]);
        }else{
            return json_encode(['code'=>'400','message'=>'fail']);
        }
    }
    public function find(){
        $pdo = new  PDO('mysql:host=localhost;dbname=month1;charset=utf8');//连接数据库
        $sql = "select * from fruit where id = 1";
        $res = $pdo->exec($sql);
        if($res){
            return json_encode(['code'=>'200','res'=>$res]);
        }else{
            return json_encode(['code'=>'400','message'=>'fail']);
        }
    }

    public function delete(){
        $pdo = new  PDO('mysql:host=localhost;dbname=month1;charset=utf8');//连接数据库
        $sql = "delete from fruit where id = 1";
        $res = $pdo->exec($sql);
        if($res){
            return 1;
        }else{
            return 2;
        }
    }

    public function update(){
        $pdo = new  PDO('mysql:host=localhost;dbname=month1;charset=utf8');//连接数据库
        $sql = "update fruit set VALUES (NULL ,NAME='香橙' ,NULL )";
        $res = $pdo->exec($sql);
        if($res){
            return 1;
        }else{
            return 2;
        }
    }

}