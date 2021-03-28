<?php
//1.  DB接続

try {

$pdo = new PDO('mysql:dbname=pl_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成

$stmt = $pdo->prepare("SELECT * FROM pl_table");
$status = $stmt->execute();


//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";
    $view .= '<a href="u_view.php?id='.$result["id"].'">';
    $view .= $result["date"].":".$result["game"].":".$result["hometeam"].":".$result["homescore"].":"
             .$result["awayteam"].":".$result["awayscore"].":".$result["indate"];
    $view .= '</a>';
    $view .= '　';
    $view .= '<a href="delete.php?id='.$result["id"].'">';
    $view .= ' [Delete] ';
    $view .= '</a>';
    $view .= "</p>";
  }

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' type='text/css' href='css/style.css'/>
  <link rel='stylesheet' type='text/css' href='css/style.css?v=2' />
  <link href='https://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet'>

<title>過去の試合結果</title>

<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="savepage">Save Page</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] $view-->
<div>
    <div class="container jumbotron" href="u_view.php"><?=$view?></div>
</div>
<!-- Main[End] -->
<div class="top"><a class="navbar-brand" href="index.php">Top page</a></div>
</body>
</html>