<?php
// Javaと違い、型宣言なしで変数が使える
$name = "Shinya";
$age = 41;

// 文字列内に変数を直接展開できる（Javaにはない機能）
echo "Hello, {$name}! Age: {$age}<br>";

// 型の動的変換（PHPの特徴）
$num = "10";        // 文字列
$result = $num + 5; // 自動的に数値として扱われる → 15
var_dump($result);  // int(15) と表示される

// Javaでいうfor文（ほぼ同じ）
for ($i = 0; $i < 3; $i++) {
    echo "count: {$i}<br>";
}