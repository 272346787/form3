<?php

header('content-type:text/html;charset="utf-8"');

error_reporting(0);

//获取数据

$username = $_GET['username'];
$age = $_GET['age'];
$sex = $_GET['sex'];

//读文件信息
$a =file('age.txt');
$b =file('sex.txt');
$c =file('student.txt');

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

			echo "<tr><td>姓名</td><td>性别</td><td>年龄</td></tr>";

//判断名字有没有填写

            if ($username)
            {

               for($i=0;$i<count($c);$i++)
                {

                    $name = $c[$i];

                    $str = preg_replace('/\r|\n/', '', $name);

                    if ($str===$username)
                    {

                        echo '<td>'.$c[$i].'</td>';
                        echo '<td>'.$b[$i].'</td>';
                        echo '<td>'.$a[$i].'</td>';
                        echo '</tr><tr>';

                    }

                }

            }

//判断年龄有没有填写

            else if ($age)
            {

                for($i=0;$i<count($a);$i++)
                {

                    $str = $a[$i];
                    $str = preg_replace('/\r|\n/', '', $str);
                    $age = preg_replace('/\r|\n/', '', $age);

                    if ($str===$age)
                    {

                        echo '<td>'.$c[$i].'</td>';
                        echo '<td>'.$b[$i].'</td>';
                        echo '<td>'.$a[$i].'</td>';
                        echo '</tr><tr>';
                    }

                }

            }

//判断性别有没有填写

            else if ($sex)
            {

                for($i=0;$i<count($b);$i++)
                {

                    $name = $b[$i];
                    $str = preg_replace('/\r|\n/', '', $name);

                    if ($str===$sex)
                    {

                        echo '<td>'.$c[$i].'</td>';
                        echo '<td>'.$b[$i].'</td>';
                        echo '<td>'.$a[$i].'</td>';
                        echo '</tr><tr>';
                    }

                }

            }

            else
            {

                echo "输入错误";

            }

		?>

		</tr>

	</table>
</body>

</html>


