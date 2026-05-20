<?php
// ===== 基本的な型 =====

// string（文字列）
$str = "Hello";
var_dump($str); // string(5) "Hello"

// int（整数）
$int = 42;
var_dump($int); // int(42)

// float（小数）
$float = 3.14;
var_dump($float); // float(3.14)

// bool（真偽値）
$bool = true;
var_dump($bool); // bool(true)

// null
$nothing = null;
var_dump($nothing); // NULL

echo "<hr>";

// ===== PHPならではの型変換 =====

// 文字列 → 数値の自動変換
$num_str = "10";
$result  = $num_str + 5;
var_dump($result); // int(15) ← 自動でintになる

// 明示的な型変換（キャスト）
$price   = "980円";
$casted  = (int)$price;
var_dump($casted); // int(980) ← 数値部分だけ取り出す

echo "<hr>";

// ===== 型の比較：PHPの注意点 =====

// == は値だけ比較（型を変換してから比較）
var_dump(0 == "hello"); // bool(true) ← 危険！Javaではあり得ない

// === は値と型を両方比較（こちらを推奨）
var_dump(0 === "hello"); // bool(false) ← 正しい比較
var_dump(1 === true);    // bool(false) ← 値は同じでも型が違う


echo phpversion();