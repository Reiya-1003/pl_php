<?php
//1. POSTデータ取得


error_reporting(E_ALL);

$date = $_POST["date"];
$game = $_POST["game"];
$hometeam = $_POST["hometeam"];
$homescore = $_POST["homescore"];
$hometext = $_POST["hometext"];
$awayteam = $_POST["awayteam"];
$awayscore = $_POST["awayscore"];
$awaytext = $_POST["awaytext"];

try {
    $pdo = new PDO('mysql:dbname=pl_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成 //
$stmt = $pdo->prepare("INSERT INTO pl_table(id, date, game, hometeam,
homescore, hometext, awayteam, awayscore, awaytext, indate )VALUES(NULL, :a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, sysdate())");
$stmt->bindValue(':a1', $date, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $game, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $hometeam, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $homescore, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $hometext, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $awayteam, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a7', $awayscore, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a8', $awaytext, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();


//４．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    //５．index.phpへリダイレクト 
    header("Location: index.php");
    exit;
}
