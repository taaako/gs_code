<?php
function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}

$flg = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];

$a = ",";

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $name.$a.$mail."\r\n");
fclose($file);

if($name==""){
    $name = "未入力です";
    $flg = 1;
}
if($mail==""){
    $mail = "未入力です";
    $flg = 1;
}
?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?php echo h($name); ?>
EMAIL：<?php echo h($mail); ?>
<?php
    if($flg == 0){
?>
    <button>登録</button>
<?php
    }
?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>