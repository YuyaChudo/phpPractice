<?php
	// // データベースへの接続
	// // mysql

	// // mysqlへの接続
	// $link = mysql_connect('localhost','root','root');
	// if(!$link){
	// 	die('couldnot connect'.mysql_error());
	// }

	// // データベースへの接続
	// $db_selected = mysql_select_db('BLOG',$link);
	// if(!$db_selected){
	// 	die('データベース選択失敗です'.mysql_error());
	// } else {
	// 	echo "データベース選択しました";
	// }

	// // クエリー
	// // クエリー文　mysql_query('');
	// $result = mysql_query('SELECT * FROM users');
	// if(!$result){
	// 	die('Queryが失敗しました'.mysql_error());
	// }

	// // mysql_fetch_assoc($result):現在ぽいんたがある行の各フィールドの値を連想配列の形にして返す

	// while($row = mysql_fetch_assoc($result)){
	// 	print('<p>');
	// 	print($row['id']);
	// 	print($row['name']);
	// 	print('</p>');
	// }

	// $sql = "INSERT INTO users(id,name,email,password) VALUES(5,'HAHA','mayumi@docomo.ne.jp','1216')";
	// $result_flag = mysql_query($sql);
	// if(!$result_flag){
	// 	die('INSERTクエリーが失敗しました'.mysql_error());
	// }


	// print('<p>追加後のデータを取得</p>');

	// $result = mysql_query('SELECT * FROM users');
	// while($row = mysql_fetch_assoc($result)){
	// 	print('<p>');
 //    	print('id='.$row['id']);
 //    	print(',name='.$row['name']);
 //    	print(',email='.$row['email']);
 //    	print(',password='.$row['password']);

 //    	print('</p>');
	// }



	// // mysqlに対するクエリ発行など
	// mysql_close($link);

	// try {
	// 	$dbh = new PDO('mysql:host=localhost;dbname=BLOG','root','root');
	// } catch (PDOException $e){
	// 	var_dump($e->getMessage());
	// 	exit;
	// }

	// // 処理
	// $sql = "select * from users";
	// $stmt = $dbh->query($sql);
	// foreach($stmt->fetchAll(PDO::FETCH_ASSOC)as $user){
	// 	var_dump($user['name']);
	// }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8"/>
	<title>php practice</title>
</head>
<body>
	<h1>php practice</h1>
	<p></p>	
	</form>
</body>
</html>