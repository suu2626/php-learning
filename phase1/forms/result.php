<?php
// フォームから送信されたデータを受け取る
// $_POSTはPHPのスーパーグローバル変数（どこからでもアクセス可能）
$username = $_POST["username"];
$age      = $_POST["age"];

// 受け取った値の型を確認
var_dump($username); // string
var_dump($age);      // string ← 数値入力でも文字列で届く

echo "<hr>";

// htmlspecialchars()でHTMLの特殊文字を無害化する
$safe_username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

// 型変換して使う
$age_int = (int)$age;
echo "名前：{$username}<br>";
echo "年齢：{$age_int}歳<br>";
echo "来年の年齢：" . ($age_int + 1) . "歳<br>";
?>

<a href="form.html">戻る</a>