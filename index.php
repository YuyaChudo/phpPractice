<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8"/>
	<title>php practice</title>
</head>
<body>
	<h1>php practice</h1>
	<form action="get_info.php" method="post">
	<input type="text" name="birthday" value="">
	<input type="submit" value="submit">	
	</form>

<?php 
echo "hello world";
// 変数：値につけるラベル
// $で始まり、英数字_を使うことができる
// ex) $message = "hello world";

// 変数型:文字列、整数、論理値、オブジェクト型

// 定数：変更不可のデータ
// 定数の作成方法
// define("NAME", "???");
// 定数は、大文字で記入

// 演算子
// + - / * %

// 文字列の連結演算子
// echo "Hello ". "world"; 
// ”変数とエスケープ文字を展開する”
// $name = "yuya";
// echo "Hello, \n$name";

// 条件分岐
// if( ){}

// $age = 20;
// if ($age >= 20){
// 	echo "You can drink alcohol";
// } else {
// 	echo "You cann't drink alcohol";
// }


// 三項演算子
// $age = 20;
// $message = ($age > 20)? "adult":"kids";
// echo $message;

// 配列
// $変数名 = array("", "", "","");

// $youbi = array("日","月","火");


//　配列関数
// 配列数をカウントし、返す
// count($youbi)

// sort($youbi) アルファベット順にソートする

// in_array("日", $youbi){}


// for ($i = 0; $i < 3; $i++){
// 	echo $youbi[$i];
// }

// 連想配列
// $studentID = array(1=>"Tanaka", 2=>"Taguchi", 3=>"Noda", 4=>"Kimura");

// for($i = 1; $i++; $i < 5){
// 	echo "studentID:$i ". "Name: $studentID[$i] \n";
// }

// implode("??", $youbi) "??"で配列を区切る


// 文字列に関する関数
// printf(); 書式を指定して文字列を表示する
// $s = "banana";
// $n = 40;
// $p = 5.23;
// printf("we have %05d %ss for $%.2f", $n, $s, $p);


// sprintf(); フォーマット化された文字列を返す
// echo sprintf("we have %05d %ss for $%.2f", $n, $s, $p);

// $num = array("1","2","3","4","5","6");
// $implodeNum = implode("個", $num);
// var_dump($implodeNum);
// $explodeNum = explode("個", $implodeNum);
// var_dump($explodeNum);



// -----------------------------------------------------
//　日付や時間に関する関数
// mktime
// time()
// UNIXタイムスタンプ（1970/01/01 00:00からの経過秒数）
// mktime(時間、分、秒、月、日)
// strtotime(2012/2/12 11:00:00)
// 特定日付のフォーマットに変更する
// date();
// echo date("Y年m月d日 H時i分s秒");



// -----------------------------------------------------
// ファイルの書き込み
// is_writable("ファイル名") : ファイル書き込みできるか否か
// fopen("ファイル名", "a or w(ファイル書き込み方法)") a: 末尾　w:最初
// fopen("","") -> file pointer resourceが返ってくる
// もし返ってこない場合＝開けない
// fwrite(file pointer resource, 書き込む内容) : 書き込み、true/falseを返す

// $testFile = "READ_ME.txt";
// $contents = "Hello";

// if(is_writable($testFile)){

// 	if(!$fp = fopen($testFile,"a"){
// 		echo "could not open!";
// 		exit;
// 	}

// 	if(fwrite($fp, $contents) === false){
// 		echo "could not write!";
// 		exit;
// 	}

// 	echo "success";

// 	// 終了処理
// 	fclose($fp);

// } else {
// 	echo "not writable!";
// 	exit;
// }


// -----------------------------------------------------
// ファイルからデータを呼び出す
// fopen(ファイル名, "r(読み込む)");
// fread(ファイル名, ファイルサイズ：どれだけ読み込むか);
// filesize(ファイル名);　：ファイルサイズの取得

// $testFile = "READ_ME.txt";

// if (!$fp = fopen($testFile, "r")){
// 	echo "could not open";
// 	exit;
// }

// $contents = fread($fp, filesize($testFile));
// var_dump($contents);

// fclose($fp);


// -----------------------------------------------------

//  ファイルの読み込み（別方法）
// file_get_contents(ファイル名);
// web siteを取得する
// file_get_contents("http://google.com");

// $testFile = "READ_ME.txt";
// $contents = file_get_contents("http://dotinstall.com/lessons/basic_php_beginner/6831");
// var_dump($contents);

// -----------------------------------------------------
// フォームからのデータを取る
// <form action="get_info.php" method="post">
	// <input type="text" name="birthday" value="">
	// <input type="submit" value="submit">	
// </form> 
//
// get_info内
// <?php 
//  $birthday = $_POST['birthday'];
//  $youbi = date('l(曜日のフォーマット)', $birthday);
// -----------------------------------------------------

// データベースへの接続

?>
</body>
</html>
