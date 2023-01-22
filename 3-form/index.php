<?php
echo time();
var_dump(time());
echo date("Y-m-d H:i:s", time());
echo date("Y-m-d H:i:s", 1491980400);
echo date("Y年m月d日 H時i分s秒", time());
echo strtotime("last Sunday");
// 2日後
echo strtotime("+2 day");
echo strtotime("2017/2/16 11:25:00");
?>