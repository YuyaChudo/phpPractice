<?php 


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











?>