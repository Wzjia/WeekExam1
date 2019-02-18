<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/2/18
 * Time: 8:47
 */

echo "1，n到m之间的所有水仙花数</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$n = 153;
//$a = 1;
//$b= 5;
//$c= 3;
// $m = $a^3+$b^3+$c^3;
$m = ($n / 100);
$a = ($m % 10);
$p = ($n / 10);
$b =  substr($p % 100,1);

$c = ($n % 10);
 echo "a = $a,</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b = $b,</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c = $c,</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 echo '水仙花数为：'.$a.$b.$c;


 echo "</br></br>2,给定一个英文字符串,请编写一个PHP函数找出这个字符串中首先出现三次的那个英文字符(需要区分大小写)</br>&nbsp;&nbsp;&nbsp;";
 $n = "aasdaklsjdks";
 $c =substr(strrev($n),1);
 echo $c.'</br>';


 echo "</br>3,判断一个字符串是否为回文字符串，回文字符串是指从头往后读与从后往前读是同样的顺序，如“abba”</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $a = 'abba';
  $b = strrev($a);
  if($a == $b){
      echo $a."是回文字符串</br>";
  }else{
      echo $a."不是回文字符串</br>";
  }

  echo "</br>4.传入一个数字n，返回1到n之间的斐波那契数列（斐波那契数列：1 1 2 3 5 8 13....每一个值都是前两个值的和）</br>&nbsp;&nbsp;&nbsp;&nbsp;";
   for($i = 1;$i<5;$i++){
       for ($j =1; $j<=$i;$j++){
           echo $j.'</br>';
       }
   }

 echo "</br>5,传入一个十进制数字，返回数字对应的英文字母：
	例： 1 = a ； 2 = b； 26 = z； 27 = aa； 52 = az； 53 = ba； 703 = aaa；</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
";

   echo"</br>6.传入一个数字n代表台阶的个数，每次只能走1阶或者2阶台阶，返回走到第n阶台阶一共有多少种走法：</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
   $n = 30;
   $num = 1;
   $num1 =2;
   if($num ||$num1 ){
       echo '一共有'.$n/$num.'种方法';
   }






