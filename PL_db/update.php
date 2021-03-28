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
$id = $_POST["id"];


try {
    $pdo = new PDO('mysql:dbname=pl_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成 //
$sql = 'UPDATE pl_table SET date=:date, game=:game, hometeam=:hometeam,
        homescore=:homescore, hometext=:hometext, awayteam=:awayteam,
        awayscore=:awayscore, awaytext=:awaytext  WHERE id=:id';
        
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':game', $game, PDO::PARAM_STR);
$stmt->bindValue(':hometeam', $hometeam, PDO::PARAM_STR);
$stmt->bindValue(':homescore', $homescore, PDO::PARAM_INT);
$stmt->bindValue(':hometext', $hometext, PDO::PARAM_STR);
$stmt->bindValue(':awayteam', $awayteam, PDO::PARAM_STR);
$stmt->bindValue(':awayscore', $awayscore, PDO::PARAM_INT);
$stmt->bindValue(':awaytext', $awaytext, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();


//４．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    //５．select.phpへリダイレクト 
    header("Location: select.php");
    exit;
}

?>