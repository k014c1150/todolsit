<?php
$trash_icon = "<i class='fa fa-trash-o' aria-hidden='true'></i>";

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
		<form method="get" action = "index.php">
		<input type="text" name="add" >
		<p>
		<input type="submit" value="追加">
		</p>
		</form>
		<hr>
		
		<?php
		if(isset($_GET['add'])){
			//DBにデータを受け渡す
		}
		if(@$_GET['delete']){
			/*DBのデータを消す処理*/
		}		
		$tasks = ["testtask","testtask2"] /*DBから取得したデータを代入*/;
		$index = 0;
		$tasks_total_num = count(@$tasks);
		echo "<form method ='get' action ='index.php'>";
		while($tasks_total_num > $index) 
		{
			echo "<li>";
			echo $tasks[$index];
			//echo "";
			echo "<button name = 'delete'>$trash_icon</button>";
			$index++;
		}
		echo "</form>"
		?>
	</body/
</html>
