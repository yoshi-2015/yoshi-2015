<!DOCTYPE html>
<html>
<head>
<meta charset="uft-8">
<title>SNS2</title>
</head>

<body>
  <?php
  $my_nam = htmlspecialchars($_POST["n"], ENT_QUOTES);
  $my_mes = htmlspecialchars($_POST["m"], ENT_QUOTES);
  $db = new PDO("mysql:host=localhost;dbname=db","root","root");
  $db->query("INSERT INTO tb (ban,nam,mes,dat) VALUES (NULL,'$my_nam','$my_mes',NOW())");

  print "書き込みに成功！";
  print "<p><a href='sns1.php'>一覧表示へ</a></p>";
  ?>
</body>
</html>
