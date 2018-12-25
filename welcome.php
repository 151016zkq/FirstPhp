<?php
/**
 * Created by PhpStorm.
 * User: zhangkaiqiang
 * Date: 2018/12/3
 * Time: 11:20 AM
 */

$username = '这是名字';
//$memberId = $_POST["memberId"];
$sex = 1;


//连接数据库
$link = mysqli_connect("localhost","root",  'password', "zhangkaiqiang");
if (!$link) {
    echo "连接失败";
    die("Could not connect" . mysqli_error());
}else {
    echo "连接成功";
}


$dataArr = array("摩托罗拉")


$selSelect = "select * from nav";
$resut2 = mysqli_query($link,$selSelect);
$rows = array();
while ($row = mysqli_fetch_assoc($resut2)){
    $rows[] = $row;
}
//修改表删除字段
var_dump($rows);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>操作数据库</title>
</head>
<body>
    <table border="1" width="300">
        <tr>
            <th>id</th>
            <th>nav_name</th>
        </tr>
        <?php foreach ($rows as $key=>$value){ ?>
            <tr>
                <td>

                    <?php echo $value["id"]; ?>

                </td>
                <td>
                    <?php echo $value["nav_name"]; ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>