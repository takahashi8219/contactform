<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into contactform(name,mail,age,comments)
value('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>

<!doctype HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
  <title>お問合せフォームを作る</title>
<link rel="stylesheet"type="text/css" href="style2.css">
</head>

<body>

  <h1>お問合せフォーム</h1>

  <div class="confirm">
    <p>
    お問い合わせ有難うございました。<br>
    </p>
  </div>
</body>
</html>
