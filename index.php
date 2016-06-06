<?php
$trash_icon = "<i class='fa fa-trash-o' aria-hidden='true'></i>";
$dsn = 'mysql:dbname=todolist;host=localhost';
$user = 'root';
$password = '';
try{

$dbh = new PDO($dsn,$user,$password);
}catch(Exception $e){
	print('Connection failed:'.$e ->getMessage());
	die();
}
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
		<input type="text" name="task" >
		<p>
		<input type="submit" value="追加" name ="add">
		</p>
		</form>
		<hr>
		
		<?php
		if(isset($_GET['add'])){
			$item = $_GET['task'];
			$item = htmlspecialchars($item,ENT_QUOTES);
			$sql = 'INSERT INTO list(task) VALUES(:item)';
			$stmt = $dbh -> prepare($sql);
			$stmt ->bindParam(':item',$item);
			$stmt -> execute();
		}
		if(@$_GET['delete']){
			$id = $_GET['delete'];//削除するデータの特定

			$sql = 'DELETE FROM list WHERE id =:id ';
			$stmt = $dbh ->prepare($sql);
			$stmt ->bindParam(':id',$id);
			$stmt -> execute();

		}		
		 /*DBから取得したデータを代入*/;
		$link = mysql_connect("localhost","root","");
		if (!$link) {
		    die('接続失敗です。'.mysql_error());
		}

		$db_selected = mysql_select_db('todolist', $link);
		if (!$db_selected){
		    die('データベース選択失敗です。'.mysql_error());
		}

		$result = mysql_query('SELECT id,task FROM list');
		mysql_close($link);

		if (!$result) {
		    die('クエリーが失敗しました。'.mysql_error());
	
		}


	

		while($tasks = mysql_fetch_assoc($result)) 
		{
			echo "<form method ='get' action ='index.php'>";
			echo "<li>";
			echo $tasks["task"];
			$id = $tasks["id"];
			echo "<button name = 'delete' value = '" . $id . "'>$trash_icon</button>";
		}
		echo "</form>"
		?>
	</body>
</html>
