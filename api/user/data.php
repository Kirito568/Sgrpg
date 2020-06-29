<?php
require_once('../define.php');

// 実行したいSQL
$sql = 'SELECT * FROM User';  // Userテーブルの全ての列を取得する


//-------------------------------------------------
// SQLを実行
//-------------------------------------------------
try{
  $dsn=Define::$dsn;
  $user=Define::$user;
  $pw=Define::$pw;

  $dbh = new PDO($dsn, $user, $pw);  
} 
catch(PDOexception $e){
  exit(1);
}// 接続
$sth = $dbh->prepare($sql);         // SQL準備
$sth->execute();                    // 実行

// 取得した内容を表示する
while( $buff = $sth->fetch(PDO::FETCH_ASSOC) ){  // 実行結果から1レコード取ってくる
  $id    = $buff['id'];
  $lv    = $buff['lv'];
  $exp   = $buff['exp'];
  $money = $buff['money'];

  // 表示する
  printf("%d, %d, %d, %d\n", $id, $lv, $exp, $money);
}
