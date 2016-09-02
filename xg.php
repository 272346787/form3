
<?php

header('content-type:text/html;charset="utf-8"');

error_reporting(0);

//获取数据

$username = $_GET['username'];
$age = $_GET['age'];
$sex = $_GET['sex'];

$a =file('age.txt');
$b =file('sex.txt');
$c =file('student.txt');

            if ($username)
            {

               for($i=0;$i<count($c);$i++)
                {

                    $name = $c[$i];

                    $str = preg_replace('/\r|\n/', '', $name);

                    if ($str===$username)
                    {

                    $txt = file_get_contents('age.txt');
                    $txt = str_replace("$a[$i]","{$age}",$txt);
                    file_put_contents("age.txt",$txt);
                    exit();

                    }

                }

            }


?>















