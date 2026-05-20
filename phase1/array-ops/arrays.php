<?php
// ===== 基本的な配列 =====

// Javaのint[]に近いイメージ（ただし型混在OK）
$fruits = ["apple", "banana", "cherry"];
var_dump($fruits[0]); // string(5) "apple"

// 末尾に追加（JavaのArrayList.add()に相当）
$fruits[] = "grape";
print_r($fruits); // 配列の中身を見やすく表示

echo "<hr>";

// ===== 連想配列 =====

// JavaのHashMap<String, String>に相当
$user = [
    "name" => "Shinya",
    "age"  => 41,
    "lang" => "PHP",
];
echo $user["name"]; // Shinya
echo "<br>";
var_dump($user["age"]); // int(25)

echo "<hr>";

// ===== 配列操作の関数 =====

$numbers = [3, 1, 4, 1, 5, 9, 2, 6];

// 要素数（JavaのArray.length相当）
echo count($numbers);
echo "<br>";

// ソート
sort($numbers);
print_r($numbers); // [1, 1, 2, 3, 4, 5, 6, 9]

echo "<hr>";

// array_map（JavaのStream.map()に相当）
$doubled = array_map(function($n) {
    return $n * 2;
}, $numbers);
print_r($doubled);

echo "<hr>";

// array_filter（JavaのStream.filter()に相当）
$evens = array_filter($numbers, function($n) {
    return $n % 2 === 0;
});
print_r($evens);