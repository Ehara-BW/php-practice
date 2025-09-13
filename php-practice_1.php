<?php
// Q1 変数と文字列
$name = "江原";

echo "私の名前は「" . $name . "」です。";


// Q2 四則演算
$num = 5 * 4;

echo "$num \n";
echo $num / 2;


// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo date("現在時刻は、"."Y年m月d日 H時i分s秒"."です。");


// Q4 条件分岐-1 if文
$device = "windows";

if ($device === "windows" || $device === "Mac") {

		echo "使用OSは、".$device."です。";

  	} else {

			echo "どちらでもありません。";

		}


// Q5 条件分岐-2 三項演算子
$age = 27;

$message = ($age < 18) ? "未成年です。" : "成人です。";

echo $message;


// Q6 配列
$prefectures = ["群馬県", "埼玉県" ,"茨城県", "栃木県", "千葉県", "東京都", "神奈川県"];

echo "$prefectures[3]"."と"."$prefectures[4]"."は関東地方の都道府県です。";


// Q7 連想配列-1
$prefectures = [
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "茨城県" => "水戸市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "東京都" => "新宿区",
    "神奈川県" => "横浜市"
    ];

foreach ($prefectures as $prefecture => $capital){

    echo $capital;
    echo "\n";

}


// Q8 連想配列-2
$prefectures = [
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "茨城県" => "水戸市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "東京都" => "新宿区",
    "神奈川県" => "横浜市"
    ];

foreach ($prefectures as $prefecture => $capital){

   if ($prefecture === "埼玉県"){

        echo $prefecture."の県庁所在地は、".$capital."です。";
    }

}


// Q9 連想配列-3
$prefectures = [
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "茨城県" => "水戸市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "山梨県" => "甲府市",
    "長野県" => "長野市"
    ];

$kanto = ["群馬県", "埼玉県", "茨城県", "栃木県", "千葉県", "東京都", "神奈川県"];

foreach ($prefectures as $prefecture => $capital){

   if (in_array ($prefecture, $kanto)){

        echo $prefecture."の県庁所在地は、".$capital."です。\n";

    } else {

        echo  $prefecture."は関東地方ではありません。\n";

      }

}


// Q10 関数-1
function hello($name) {

    echo $name."さん、こんにちは。\n";
}

hello("佐藤");
hello("鈴木");


// Q11 関数-2
function calcTaxInPrice($price) {

    $taxInPrice = $price * 1.1;
    echo $price."円の商品の税込価格は".$taxInPrice."円です。\n";

}

calcTaxInPrice(1000);


// Q12 関数とif文
function distinguishNum($num) {

	echo ($num % 2 !== 0) ? $num."は奇数です。" : $num."は偶数です。";

}

distinguishNum(13);

echo "\n";

distinguishNum(72);


// Q13 関数とswitch文
function evaluateGrade($grade) {

        switch ($grade) {

			case "A":
            case "B":
                echo "合格です。";
                break;

            case "C":
                echo "合格ですが追加課題があります。";
                break;
            case "D":
                echo "不合格です。";
                break;

            default:
                echo "判定不明です。講師に問い合わせてください。";
                break;

    }

}

evaluateGrade("A");
echo "\n";
evaluateGrade("1");

?>