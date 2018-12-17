<?php
/**
 * Created by PhpStorm.
 * User: zhangkaiqiang
 * Date: 2018/11/24
 * Time: 11:26 AM
 */
echo  "张凯强";

$userName = isset($_POST["username"]) ? $_POST["username"] : "";
$passWord = isset($_POST['password']) ? $_POST['password'] : "";
var_dump($userName);
var_dump($passWord);
//session开启session功能，每个页面必须都开启一次。
session_start();
$_SESSION['userName'] = $userName;

$x=5;
$y=10;


$id = isset($_GET["id"]) ? $_GET['id'] : 1;
if ($id == 1) {
    include './index.html';
}elseif ($id == 2) {
    include "./index2.html";
}else {
    include './index3.html';
}
//计算一张纸折叠几次后，厚度超过一米
//一张纸厚度是0.01毫米
$height = 0.1/1000;/*厘米*/

$i = 1;
while ($i <= 30) {
    $height *= 2;
    if ($height>=1 && $height<=2) {
        echo $height;
    }
}




function myTest() {
    global $x, $y;
    $y=$x+$y;
}
function staticTest() {
    //不想让x在作用域之外消失
    static  $x=11;
    echo  $x;
    $x++;
}
staticTest();
staticTest();
staticTest();
echo "<br>";
$cars= array("volvo","bmw");
echo "<br>";

echo $cars[0];


myTest();


class Car {
    var $color;
    function construct($color="green") {
        $this->color = $color;
    }
    function  what_color() {
        return $this->color;
    }
}
//常量是全局的。
define("NAME", "欢迎访问Runoob.com", true);
echo name;

var_dump($y);

echo $y;
echo $GLOBALS['x'];
//echo可以输出多个字符串，且没有返回值。print只能输出一个字符串且有返回值1，echo输出速度更快一点
echo  "张凯强", "就是这个样子";

echo "<br>";
$text1="赘婿ccc";
$text2="赘婿";
echo $text1. "" .$text2;
echo "<br>";
echo strlen($text1);
echo "<br>";
echo strpos($text1, $text2);
$text1 .= $text2;
echo "<br>";
echo $text1;

$count = 20;
echo $count;
echo "<br>";
echo ++$count;
echo "<br>";
echo $count;
echo "<br>";
echo $count++;
echo "<br>";
echo $count;
echo "<br>";
echo isset($text1);
echo "<br>";
echo date("H");
if (date("H")<"20") {
    echo "<br>";
    echo "have a good day";
}else {
    echo "<br>";
    echo "结束";
}
echo "<br>";
echo date("H");
echo "<br>";
//切换时区
if (date_default_timezone_get() != "Asia/Shanghai")  date_default_timezone_set("Asia/Shanghai");
echo date("H");
echo "<br>";
echo date("h");
echo "<br>获取当前时间";
echo date("Y-m-d h:i:s",time());
echo "<br>switch语句";
$n="zhangkaiqiang";
//需要break,如果没有break那么如果找到符合条件的case就会顺序执行下去
switch ($n) {
    case "zhangkaiqiang":
        echo "<br> $n";
        break;

    case "hangkaiqiang":
        echo "<br>$n";
        break;
    default:
        echo "<br>都不符合条件的时候执行这里";

}
echo "<br>数值数组";
$myCars=array("volvo", "bmw", "toyota");
echo "<br>数组的长度";
echo count($myCars);
echo "<br>遍历数组";
for ($x=0; $x<count($myCars);$x++) {
    echo "<br>$myCars[$x]";
}
echo "<br>关联数组";
$age = array("A"=>"12", "B"=>"13");
$age["tom"] = "14";
$age["jerry"] = "15";
echo "tom age is" . $age["A"];
foreach ($age as $x=>$x_value) {
    echo "<br>key=" . $x . "value=" . $x_value;
}
echo "<br>对数组进行升序排泄";
sort($myCars);
foreach ($myCars as $x) {
    echo "<br>升序排列" . $x;
}
echo "<br>对数组降序排列";
rsort($myCars);
foreach ($myCars as $x) {
    echo "<br>对数组降序" . $x;
}
echo "<br>关联数组排序";
asort($age);
foreach ($age as $x=>$x_value) {
    echo "<br>关联数组排序key=" . $x . "value= " . $x_value;
}
arsort($age);
foreach ($age as $x=>$x_value) {
    echo "<br>关联数组降序key=" . $x . "value= " . $x_value;
}
ksort($age);
print_r($age);
krsort($age);
print_r("<br>降序");
print_r($age);
echo "<br>关联数组升序";
asort($age);
print_r($age);
echo "<br>关联数组降序";
arsort($age);
print_r($age);

echo "<br>根据关联数组的键值关联数组升序ksort";
ksort($age);
print_r($age);
echo "<br>根据关联数组的键值对关联数组降序krsort";
krsort($age);
print_r($age);
echo "<br>";
print_r($GLOBALS);
echo "<br>文件命" . $_SERVER['PHP_SELF'];
echo "<br>服务器使用的CGI版本" . $_SERVER["GATEWAY_INTERFACE"];
echo "<br>当前服务器运行的的IP地址" . $_SERVER["SERVER_ADDR"];

echo "<br>";
$postName = $_POST["fname"];
echo $postName;




