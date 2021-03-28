<?php

$id = $_GET["id"];

try {
    $pdo = new PDO('mysql:dbname=pl_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成 //
$sql = 'DELETE FROM pl_table WHERE id=:id';
        
$stmt = $pdo->prepare($sql);
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