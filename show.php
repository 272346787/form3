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

			error_reporting(0);

//用数组的办法读取所有文件信息

			$a =file('age.txt');
			$b =file('sex.txt');
			$c =file('student.txt');

			echo "<tr><td>姓名</td><td>性别</td><td>年龄</td></tr>";

//判断输出

			for($i=0;$i<count($a);$i++)
			{ 

				echo '<td>'.$c[$i].'</td>';
				echo '<td>'.$b[$i].'</td>';
				echo '<td>'.$a[$i].'</td>';
				echo '</tr><tr>';

			}

		?>

		</tr>

	</table>

</body>

</html>