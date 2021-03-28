<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
 
  <title>20/21シーズン　プレミアリーグ試合結果</title>
  
  <link rel='stylesheet' type='text/css' href='css/style.css'/>
  <link rel='stylesheet' type='text/css' href='css/style.css?v=2' />
  <link href='https://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet'>
</head>

<body>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="title">20/21 Season premier League Archive　</a></div>
    </div>
  </nav>
</header>

<form method="post" action="insert.php">

<div class="date"><label>Date<br><input type="date" name="date" ></input></label></div><br>

<div class="game">Section<br>
    <select name="game" class="game2">
      <option value="第1節">第1節</option><option value="第2節">第2節</option><option value="第3節">第3節</option>
      <option value="第4節">第4節</option><option value="第5節">第5節</option><option value="第6節">第6節</option>
      <option value="第7節">第7節</option><option value="第8節">第8節</option><option value="第9節">第9節</option>
      <option value="第10節">第10節</option><option value="第11節">第11節</option><option value="第12節">第12節</option>
      <option value="第13節">第13節</option><option value="第14節">第14節</option><option value="第15節">第15節</option>
      <option value="第16節">第16節</option><option value="第17節">第17節</option><option value="第18節">第18節</option>
      <option value="第19節">第19節</option><option value="第20節">第20節</option><option value="第21節">第21節</option>
      <option value="第22節">第22節</option><option value="第23節">第23節</option><option value="第24節">第24節</option>
      <option value="第25節">第25節</option><option value="第26節">第26節</option><option value="第27節">第27節</option>
      <option value="第28節">第28節</option><option value="第29節">第29節</option><option value="第30節">第30節</option>
      <option value="第31節">第31節</option><option value="第32節">第32節</option><option value="第33節">第33節</option>
      <option value="第34節">第34節</option><option value="第35節">第35節</option><option value="第37節">第37節</option>
      <option value="第37節">第37節</option><option value="第38節">第38節</option>

      
    </select>
</div>


<!-- ホームチーム -->
<div class="home">
  <p class="hometeam">HOME TEAM<br>
    <select name="hometeam" >
      <option value="H.アーセナル">アーセナル</option>
      <option value="H.アストンヴィラ">アストンヴィラ</option>
      <option value="H.WBA">WBA</option>
      <option value="H.ウェストハム">ウェストハムU</option>
      <option value="H.ウルブス">ウルブス</option>
      <option value="H.エヴァートン">エヴァートン</option>
      <option value="H.クリスタルパレス">クリスタルパレス</option>
      <option value="H.サウサンプトン">サウサンプトン</option>
      <option value="H.シェフィールド">シェフィールド</option>
      <option value="H.チェルシー">チェルシー</option>
      <option value="H.トッテナム">トッテナム</option>
      <option value="H.ニューカッスル">ニューカッスル</option>
      <option value="H.バーンリー">バーンリー</option>
      <option value="H.ブライトン">ブライトン</option>
      <option value="H.フラム">フラム</option>
      <option value="H.マンチェスターC">マンチェスターC</option>
      <option value="H.マンチェスターU">マンチェスターU</option>
      <option value="H.リーズ">リーズ</option>
      <option value="H.リヴァプール">リヴァプール</option>
      <option value="H.レスター">レスター</option>
    </select>
  </p>

  <p>得点<br>
	<input type="number" name="homescore" min="0" max="10"></p>

   <label class="hometext"><textarea name="hometext" rows="10" cols="100">【フォーメーション】【ゴール】【交代】【レビュー】</textarea></label><br>
</div> 
<!-- </form> -->


<div class="vs">VS</div>

<!-- アウェイチーム -->
<div class="away">
  <p class="awayteam">AWAY TEAM<br>
    <select name="awayteam" >
    　<option value="A.アーセナル">アーセナル</option>
      <option value="A.アストンヴィラ">アストンヴィラ</option>
      <option value="A.WBA">WBA</option>
      <option value="A.ウェストハム">ウェストハムU</option>
      <option value="A.ウルブス">ウルブス</option>
      <option value="A.エヴァートン">エヴァートン</option>
      <option value="A.クリスタルパレス">クリスタルパレス</option>
      <option value="A.サウサンプトン">サウサンプトン</option>
      <option value="A.シェフィールド">シェフィールド</option>
      <option value="A.チェルシー">チェルシー</option>
      <option value="A.トッテナム">トッテナム</option>
      <option value="A.ニューカッスル">ニューカッスル</option>
      <option value="A.バーンリー">バーンリー</option>
      <option value="A.ブライトン">ブライトン</option>
      <option value="A.フラム">フラム</option>
      <option value="A.マンチェスターC">マンチェスターC</option>
      <option value="A.マンチェスターU">マンチェスターU</option>
      <option value="A.リーズ">リーズ</option>
      <option value="A.リヴァプール">リヴァプール</option>
      <option value="A.レスター">レスター</option>
    </select>
  </p>


  <p class="awayscore">得点<br>
	<input type="number" name="awayscore" min="0" max="10"></p>

  <p class="awaytext"><textarea name="awaytext" rows="10" cols="100">【フォーメーション】【ゴール】【交代】【レビュー】</textarea></p><br>
</div>

 <div class="save"><input type="submit" value="Save" class="save"></div>

 <div class="arcive"><a class="navbar-brand" href="select.php">Archive　</a></div>

</form>
</html>