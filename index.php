<?php

$tasks = ["作業1","会議1","○○の勉強"];
$icon = "<i class='fa fa-trash-o' aria-hidden='true'></i>"
/*
$link = mysql_connect('localhost', 'user', 'pass');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db('database_name', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

$result = mysql_query('SELECT * FROM xxxx');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}

mysql_close($link);
*/
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
		<title>todo lsit</title>
	</head>
	<body>
		<h1>todo lsit</h1>
		<form name=myText>
		<input type="text" name=myText value="タスクを入力してください">
		</form>
		<p>
		<input type="button" value="追加" onclick="">
		</p>
		<hr>
		
		<?php
		$index = 0;
		$tasks_total_num = count($tasks);
		while($tasks_total_num > $index) 
		{
			echo "<li>";
			echo $tasks[$index];
			echo "<button onclick = \"\">$icon</button>";
			$index++;
		}
		?>
	</body>
</html>

