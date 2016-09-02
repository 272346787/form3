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

//打开文件

$file_n = fopen("student.txt","a") or exit("Unable to open file!");
$file_a = fopen("age.txt","a") or exit("Unable to open file!");
$file_s = fopen("sex.txt","a") or exit("Unable to open file!");

?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<title>Document</title>

<style type="text/css">

	table
	{
		width:800px;
		line-height: 40px;
		text-align: center;
		margin: 50px auto;
	}

	td
	{
		border: #000 solid 1px;
	}

</style>

</head>

<body>

	<table border="1px">

		<tr>

		<?php

			echo '<caption>学生信息</caption>';

			echo "<tr><td>姓名</td><td>年龄</td><td>性别</td></tr>";

//判断名字有没有填写

            if ($username)
            {

               for($i=0;$i<count($c);$i++)
                {

                    $name = $c[$i];
                    $str = preg_replace('/\r|\n/', '', $name);

                    if ($str===$username)
                    {

                        unset($c[$i]);
                        unset($b[$i]);
                        unset($a[$i]);

//用写的方式打开文件

                        $file_n = fopen("student.txt","w");
                        $file_a = fopen("age.txt","w");
                        $file_s = fopen("sex.txt","w");

//清空文件

                        file_put_contents('$a','');
                        file_put_contents('$b','');
                        file_put_contents('$c','');

                    }

                }

//写文件

                foreach ($c as $url)
              {

                  fwrite($file_n,"{$url}");

              }

               foreach ($b as $url)
               {
                fwrite($file_s,"{$url}");
               }

                foreach ($a as $url)
                {

                 fwrite($file_a,"{$url}");

               }
                echo "删除成功！";
            }

//判断年龄是否填写

            else if ($age)
            {

                for($i=0;$i<count($a);$i++)
                {

                    $str = $a[$i];
                    $str = preg_replace('/\r|\n/', '', $str);

                    //var_dump ($str);
                    //var_dump ($age);

                    if ($str===$age)
                    {

                       unset($c[$i]);
                       unset($b[$i]);
                       unset($a[$i]);

                       //用写的方式打开文件

                       $file_n = fopen("student.txt","w");
                       $file_a = fopen("age.txt","w");
                       $file_s = fopen("sex.txt","w");

                       //清空文件

                       file_put_contents('$a','');
                       file_put_contents('$b','');
                       file_put_contents('$c','');

                    }

                }

                  foreach ($c as $url)
                {

                    fwrite($file_n,"{$url}");

                }

                 foreach ($b as $url)
                 {
                  fwrite($file_s,"{$url}");
                 }

                  foreach ($a as $url)
                  {

                   fwrite($file_a,"{$url}");

                 }
                    echo "删除成功！";
            }

            else if ($sex)
            {

                for($i=0;$i<count($b);$i++)
                {

                    $name = $b[$i];
                    $str = preg_replace('/\r|\n/', '', $name);

                    if ($str===$sex)
                    {

                       unset($c[$i]);
                       unset($b[$i]);
                       unset($a[$i]);

                       //用写的方式打开文件

                       $file_n = fopen("student.txt","w");
                       $file_a = fopen("age.txt","w");
                       $file_s = fopen("sex.txt","w");

                       //清空文件

                       file_put_contents('$a','');
                       file_put_contents('$b','');
                       file_put_contents('$c','');

                    }

                }

                foreach ($c as $url)
                  {

                      fwrite($file_n,"{$url}");

                  }

                   foreach ($b as $url)
                   {
                    fwrite($file_s,"{$url}");
                   }

                    foreach ($a as $url)
                    {

                     fwrite($file_a,"{$url}");

                   }
                    echo "删除成功！";
            }

            else
            {

                //用写的方式打开文件

               $file_n = fopen("student.txt","w");
               $file_a = fopen("age.txt","w");
               $file_s = fopen("sex.txt","w");

               //清空文件

               file_put_contents('$a','');
               file_put_contents('$b','');
               file_put_contents('$c','');


                echo "删除成功！";
            }

		?>

		</tr>

	</table>

</body>

</html>