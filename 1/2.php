<?php

header('content-type:text/html;charset="utf-8"');

error_reporting(0);

//打开文件

$file_n = fopen("student.txt","a+") or exit("Unable to open file!");
$file_a = fopen("age.txt","a+") or exit("Unable to open file!");
$file_s = fopen("sex.txt","a+") or exit("Unable to open file!");

//读文件
while (!feof($file_n))
{

 echo fgets($file_n)."<br/>";
 echo "<br/>";
 echo fgets($file_a)."<br/>";
 echo "<br/>";
 echo fgets($file_s)."<br/>";
 echo "<br/>";

}

//关闭文件

fclose($file_n);
fclose($file_a);
fclose($file_s);

?>
