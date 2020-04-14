<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SNS1</title>
</head>
<body>

  <form action="sns2.php" method="post">
  名前
  <div><input type="text" name="n"></div>
  メッセージ
  <div><textarea name="m"></textarea></div>
  <input type="submit" value="送信するよ!">
  </form>
  <hr>
  <form action="sns3.php" method="post">
  検索キーワード
  <div><input type="text" name="s"></div>
  <input type="submit" value="検索するよ">
  </form>
  <hr>

  <?php
  $db = new PDO("mysql:host=localhost;dbname=db","root","root");
  $ps = $db->query("SELECT * FROM tb ORDER BY ban DESC");
  while ($r = $ps->fetch()){
    print "{$r['ban']} {$r['nam']} {$r['dat']}<br>"
    .nl2br($r['mes'])."<hr>";
  }
  ?>

</body>
</html>
