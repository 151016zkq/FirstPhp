<?php
/**
 * Created by PhpStorm.
 * User: zhangkaiqiang
 * Date: 2018/12/3
 * Time: 11:20 AM
 */
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']):'';
if ($q) {
    print_r($q);
}
