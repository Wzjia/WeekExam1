<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/25
 * Time: 8:54
 */

echo  "<br>5．编写一个单例模式的PDO数据库操作类，传入sql执行返回合适的结果即可<br>";



echo "  <br>4．银行有四个柜台，给定两个数组包含客户到达银行的时间与办理业务所需要的时间：<br>";
$active_time =  [9.01, 9.10, 9.20, 9.21, 9.22];
$process_time = [0.30, 0.18, 0.22, 0.47, 0.11];
echo "        9.31  9.28  9.42  10.07  9.31
		       1           2                    3           4
              9.30       9.28					9.42       10.07
			        	      等6分钟
                        原本结束时间9.31
				          真实结束时间9.37";

$a = $active_time[0]+$process_time[0];
$b = $active_time[1]+$process_time[1];
echo "<br>".$a."<br>".$b;

echo "<br>3．编写一个函数，传入一个数组，数组内包含n个正整数数字，返回数组内数字可以组成的最大值：<br><br>";

$arr = array(1,2,3);
foreach ($arr as $max){
    if($max = max($arr)){
        echo $max;
    }
}

echo "<br>2．编写一个程序，给定任意长度的数组，数组内包含n个数字，要求将数组分为三组，每组的和尽量相近<br><br>";

$arr = '123456';
$n = 6;
$arr1 = 1+$n;
$arr2 = 2+$n-1;
$arr3 = 3+$n-2;
echo "第一组".$arr1."=第二组".$arr2."=第三组".$arr3;



echo "<br><br>1．编写一个程序，传入n与m两个参数，生成1~n的编号，从开头的编号开始数，数到m将对应的元素删除，接下来从下一个元素开始数，数到m就删除，求最后剩下的数字<br>";

$n  = array(1,2,3,4,5,6,);
$m = 5 ;

echo "<br>n分别是：1 2 3 4 5 6 <br>编号是：0 1 2 3 4 5 6";

foreach ($n  as $v=>$m){
        if($m=5){
            echo '<br>m=5 编号对应的值是'.$n[$m].'剩下的值是12345<br>';exit;
        }
}


