<?php


//【課題１】引数に数値を指定して実行すると、数値を2倍にして返す関数を作成
function keisan($double){
return $double*2;
}

echo keisan(12) . "\n";




//【課題２】$a　と　$b　を仮引数に持ち、$a と $b　を足した結果を返す関数を作成

function keisan2($a,$b){
return $a + $b;
}

echo keisan2(2,7) . "\n";




//【課題３】$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成

$arr = array(1,3,5,7,9);

function keisan3($arr){
   $result = 1;
   foreach ($arr as $value){
    $result *= $value;
   }
  return $result;
     //return $arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
}

echo keisan3($arr) . "\n";




//【課題４】配列の中で一番大きい値を返す max_array という関数を実装しようとしているが、記述が途中で終わっている。途中の部分を完成させる。

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;
    }
   
  }
  return $max_number;
}

echo max_array($arr) . "\n";

//【課題５】次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//・strip_tags ・array_push ・array_merge ・time, mktime ・date

//■ strip_tags ■

//PHPのビルトイン関数の一種で、タグを取り除くことが出来る。指定すればタグを取り除かない処理も可能。
//構文は、 strip_tags(●,■)
//※●の部分に入力されたタグは取り除かれ、■の部分には取り除く必要の無いタグを入力しておく。

//【文例1】
$notani = "<h1>hello</h1>";
 echo strip_tags($notani);
//結果:hello

//【文例2】
 echo strip_tags("<abc>apple</abc>");
//結果:apple

//【文例3】
 echo strip_tags("<abc>orange</abc>","<abc>");
//結果:<abc>orange</abc>



//■ array_push ■

//配列の最後に要素を追加する。
//構文は、 array_push(配列,追加したい要素);

//【文例】
$array = array("東京","千葉","神奈川");
 array_push($array,"沖縄");
  print_r($array);
//結果:
//[0] => 東京
//[1] => 千葉
//[2] => 神奈川
//[3] => 沖縄



//■ array_merge ■

//配列と配列を結合する。
//構文は、 array_merge(配列1,配列2);

//【文例】
$array1 = array("東京","大阪","名古屋");
$array2 = array("北海道","沖縄");

print_r(array_merge($array1,$array2));

//結果:
//[0] => 東京
//[1] => 大阪
//[2] => 名古屋
//[3] => 北海道
//[4] => 沖縄



//■ time,mktime ■

//timeは、1970年1月1日0:00から現在までの通算秒を返す。
//構文は、echo time();
//mktimeは、1970年1月1日0:00から指定した日時までの通算秒を返す。
//構文は、mktime(時,分,秒,月,日,年);

//timeの文例
echo time() . "\n";
//結果:1576502733

//mktimeの文例
$testtime = mktime(0,0,0,1,2,1970);
 echo $testtime . "\n";
//結果:86400



//■ date ■
//日時を書式化する。
//構文は、 date(■,●);
//■は書式、●はタイムスタンプ(入力の無い場合は現在時刻となる)


echo date("Y/m/d",time());
//結果:2019/12/16


?>