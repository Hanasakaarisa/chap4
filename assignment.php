<?php
//　変数と代入


//　変数とは
//　変数とはデータの入れ物、箱のイメージになる
//　入れるデータの型によって変数の型が変化する。
//　変数には＄を付けて好きな識別名を入れることができる
//　変数は多少長くなっても意味が分かるものにすること

//　使える変数名「小文字・大文字・日本語・数字・_」
$name　$total_score　$Student1　$_temp
//　使えない変数名「先頭が数字・繋ぎに-はダメ・！」
$365days　$total-score　$coution!
//　最近だど「$totalNumber」といったように繋がる単語の先頭を大文字にするのがいいらしい


//　代入とは
//　代入は「＝」を使って行う
//　.を使って文字列をつなぐ（結合）
//　.は結合演算子という


$namae = 'ハナサカ　アリサ';　　　　//　$namaeという変数の箱に　「＝」でハナサカ　アリサという文字列を代入
echo 'ようこそ'.$namae.'さん';　   //　「ようこそ」と「ハナサカ　アリサ」と「さん」を糊のようにくっつけて表示したい時に「.」でくっつける


?>