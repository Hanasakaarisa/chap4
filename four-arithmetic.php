<?php
// 四則演算
//　+　-　*　/　%は演算子と呼ばれるものである

$a = 8;　　　//　aは8
$b = 3;　　　//　bは3

echo "$a + $b = " . ($a + $b) ."<br>"; // 11
echo "$a - $b = " . ($a - $b) ."<br>"; // 5
echo "$a * $b = " . ($a * $b) ."<br>"; // 24 
echo "$a / $b = " . ($a / $b) ."<br>"; // 2.666667　　　インテジャーで表すことができないのでフロートダブルで表示される
echo "$a % $b = " . ($a % $b) ."<br>"; // 2



// 8 / 3 = 2...2

//　算数や数学のように（）の中から優先されて計算される 
//　%の剰余は票の色付けなどに使われます。1行ごとに色を変えることで見やすくしたりします。



?>