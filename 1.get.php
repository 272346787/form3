<?php

header('content-type:text/html;charset="utf-8"');

error_reporting(0);

//接收数据

$username = $_GET['username'];
$age = $_GET['age'];
$sex = $_GET['sex'];

//打开文件

$file_n = fopen("student.txt","a") or exit("Unable to open file!");
$file_a = fopen("age.txt","a") or exit("Unable to open file!");
$file_s = fopen("sex.txt","a") or exit("Unable to open file!");

//写数据

fwrite($file_n,"{$username}"."\r\n");
fwrite($file_a,"{$age}"."\r\n");
fwrite($file_s,"{$sex}"."\r\n");

//关闭文件

fclose($file_n);
fclose($file_a);
fclose($file_s);

?>

<script>
(function() {
    window.location="http://www.php.com/sf/form/index.html";
})();
</script>
