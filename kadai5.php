<?php
//次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

/*
strip_tags
  説明：指定した文字列から HTML および PHP タグを取り除く
  使用方法：strip_tags ($text, '許可するタグ');
*/
echo "strip_tags\n\n";
$str = "<h1>我々は<b>宇宙人</b>である。</h1>";
echo "そのまま出力すると　→　".$str."\n";
echo "strip_tagを使い<b>のみ許可すると　→　".strip_tags($str, '<b>')."\n";

/*
array_push
  説明：要素を配列の最後に追加する
  使用方法：array_push($array, "追加要素", "追加要素");
*/
echo "array_push\n\n";
$array = ["Apple", "Pear", "Melon"];
print_r($array);
echo "　　↑追加前　　　↓追加後 \n" ;
array_push($array, "Lemon", "Orange");
print_r($array);

/*
array_merge
  説明：配列同士をマージした要素を作成する
  使用方法：$result = array_merge($array1, $array2);
*/
echo "array_merge\n\n";
$array1 = [1,2,9,6];
print_r($array1);
$array2 = [3,4,5,7,8];
print_r($array2);
$merge = array_merge($array1, $array2);
print_r($merge);

/*
time
 説明：現在時刻の1970年1月1日からの経過時間（単位は秒）を生成する
 使用方法：time()

mktime
  説明：指定した日付の1970年1月1日からの経過時間（単位は秒）を生成する
  使用方法：mktime(時,分,秒,月,日,年)
*/
echo "timeとmktime\n\n";
$time = time();
echo $time."\n";
$mktime = mktime(0, 0, 0, 1, 1, 1970);
echo $mktime."\n";

/*
date
 説明：日付/時刻を書式化する
 使用方法：date("フォーマットの指定, 書式化したい値)
--------------------------------------------------------
フォーマット
a	午前／午後（am または pm）
A	午前／午後（AM または PM）
B	インターネット時間（000 ～ 999）
d	2桁で示す日付（01 ～ 31）
D	3文字の曜日（Sun ～ Sat）
F	フルスペルの月（January ～ December）
g	先頭に 0 をつけない12時間単位の時間（1 ～ 12）
G	先頭に 0 をつけない24時間単位の時間（0 ～ 23）
h	2桁で示す12時間単位の時間（01 ～ 12）
H	2桁で示す24時間単位の時間（00 ～ 23）
i	2桁の分（00 ～ 59）
I	サマータイム中かどうかのフラグ（1 または 0）
j	先頭に 0 をつけない日付（1 ～ 31）
l	フルスペルの曜日（Sunday ～ Saturday）
L	閏年かどうかのフラグ（1 または 0）
m	2桁で示す月（01 ～ 12）
M	3文字で表す月（Jan ～ Dec）
n	先頭に 0 をつけない月（1 ～ 12）
O	グリニッジ標準時（GMT）との時間差（+0900 など）
r	RFC822に定義されている日付形式（Thu, 21 Dec 2000 16:01:07 +0900 など）
s	2桁で示す秒（00 ～ 59）
S	2文字で表す英語形式の序数を表すサフィックス（st, nd, rd または th）
t	指定した月の日数（28 ～ 31）
T	ローカルマシーンのタイムゾーンの設定
U	Unix時間（Unixタイムスタンプ：time（）の値と同じ）
w	数値で示す曜日（0：日 ～ 6：土）
W	ISO-8601 月曜日に始まる年単位の週番号（42：1年の第42週目）
y	西暦を2桁を示す年
Y	西暦を4桁で示す年
z	年間の通算日― 1月1日からの通算日数（0 ～ 366）
Z	タイムゾーンのオフセット秒数（-43200 ～ 43200）
 --------------------------------------------------------
*/
echo "date\n\n";
$date = date("Y年m月j日　H時i分　l",mktime(0, 0, 0, 1, 1, 1970));
echo $date."\n";

 ?>
