<?php
// Q1 変数と文字列

$name = "天内";

$introduction = "私の名前は「". $name. "」です。\n";
echo $introduction;

// Q2 四則演算

$num = 4 * 5;
echo $num. "\n";
echo ($num / 2). "\n";

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo date("現在時刻は、Y年m月d日 H時i分s秒です。\n");

// Q4 条件分岐-1 if文

$device = "windows";

if ($device === "windows" ||  $device ==="mac") {
    echo "使用osは、". $device. "です。\n";
}else {
    echo "どちらでもありません。\n";
}

// Q5 条件分岐-2 三項演算子

$age = 18;
$ageMessage = ($age >= 18) ? "成人です。\n" : "未成年です。\n";

echo $ageMessage;

// Q6 配列

$kanto = ["東京都","千葉県","埼玉県","神奈川県","群馬県","栃木県","茨城県"];

echo $kanto[3] . "と" . $kanto[4] . "は関東地方の都道府県です。\n";

// Q7 連想配列-1

$prefs = [
      "東京都" => "新宿区",
      "千葉県" => "千葉市",
      "埼玉県" => "さいたま市",
      "神奈川県" => "横浜市",
      "群馬県" => "前橋市",
      "栃木県" => "宇都宮市",
      "茨城県" => "水戸市"
];

foreach ($prefs as $prefectures => $city){
    echo $city. "\n";
}

// Q8 連想配列-2
echo $kanto[2]. "の県庁所在地は、". $prefs["埼玉県"]. "です。\n";

// Q9 連想配列-3
$prefs["愛知県"] = "名古屋市";
$prefs["大阪府"] = "大阪市";

foreach ($prefs as $prefectures => $city){
    if(in_array($prefectures, $kanto)){
    echo $prefectures. "の県庁所在地は、". $city. "です。\n";
    }else {
        echo $prefectures. "は関東地方ではありません。\n";
    }
}
?>
<?php
// Q10 関数-1

function hello($name)
{
    return $name. "さん、こんにちは。\n";
}

echo hello('金谷');
echo hello('安藤');

// Q11 関数-2

function calcTaxInPrice($price)
{
    $taxInPrice = $price * 1.1;
    return $price. "円の税込み価格は" . $taxInPrice . "円です。\n" ;
}
echo calcTaxInPrice(1000);

// Q12 関数とif文

function distinguishNum($evenodd){

    if ($evenodd % 2 == 0) {
        return $evenodd. "は偶数です。\n";
    } else {
        return $evenodd. "は奇数です。\n";
    }
}
echo distinguishNum(11);
echo distinguishNum(24);
// $wwww = distinguishNum(24);
// if (distinguishNum(24) === )


// Q13 関数とswitch文

function evaluateGrade($grade){

    switch ($grade) {
        case "A": //$gradeの値がAの時実行される。
            return "合格です。\n";
        case "B": //$gradeの値がBの時実行される。
            return "合格です。\n";
        case "C": //$gradeの値がCの時実行される。
            return "合格ですが追加課題があります。\n";
        case "D": //$gradeの値がDの時実行される.
            return "不合格です。\n";
        default:
            return "判定不明です。講師に問い合わせてください。\n";
    }
}
echo evaluateGrade("A");
echo evaluateGrade("C");

?>