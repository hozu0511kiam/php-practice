<?php
// Q1 tic-tac問題
for ($num = 1; $num <= 100; $num++) {
  if ($num % 4 ==0 && $num % 5 ==0) {
      echo "tic-tac\n"; //4の倍数かつ5の倍数のときは tic-tac を出力。
  } elseif ($num % 4 ==0) {
      echo "tic\n"; //4の倍数のときは tic を出力。
  } elseif ($num % 5 ==0) {
      echo "tac\n"; //5の倍数のときは tac を出力。
  } else {
      echo $num. "\n"; //上記以外の数のときはそのままその数字を出力する。
  }
}
//1. $num = 1（初期化）初期値は0
//2. $num <= 100（条件式）trueが返る
//3. echo（処理の実行）0が出力
//4. $num++（変化式）$numに1を代入して2回目の処理→100まで出力→falseが返り、for文から抜ける。

//for文は繰り返し回数が定まっているときに使用。

?>
<?php
//Q2 多次元連想配列

$personalInfos = [
  [
      "name" => "Aさん",
      "mail" => "aaa@mail.com",
      "tel"  => "09011112222"
  ],
  [
      "name" => "Bさん",
      "mail" => "bbb@mail.com",
      "tel"  => "08033334444"
  ],
  [
      "name" => "Cさん",
      "mail" => "ccc@mail.com",
      "tel"  => "09055556666"
  ],
];

echo $personalInfos[1]["name"]."の電話番号は".$personalInfos[1]["tel"]."です。\n";
//変数[インデックス番号][キー（インデックス番号の代わりにキーを使用。命名自由。）]
foreach($personalInfos as $number => $content) {
  echo $number+1 . "番目の". $content["name"]. "のメールアドレスは" . $content["mail"]. "で、電話番号は". $content['tel']. "です。\n";
}

//for文は繰り返し回数が定まっているときに使用。
//foreach文は連想配列の中身を抽出して処理したいときに使用。

$ageList= [25, 30, 18];

foreach($ageList as $index => $value){
    $personalInfos[$index]["age"] = $value;
}
var_dump($personalInfos);
//$index：キー
?>
<?php
// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name){
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function attend(){
        echo "授業に出席しました。\n";
    }
}

$yamada = new Student(120, "山田");
//ここで__construct（インスタンス化）
echo "学籍番号". $yamada->studentId. "番の生徒は".$yamada->studentName . "です。\n";
//クラス→オブジェクトの設計図。
//オブジェクトの中の関連のあるメソッド（関数：機能）やプロパティ（変数：データ・値）をひとまとめにしたもの。
//インスタンスとは、クラスから生成された実体。
//設計図であるクラスからオブジェクトを作ることをインスタンス化と呼ぶ。

// Q4 オブジェクト-2
class Students
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function attend($lesson)
    {
        echo $this->studentName. "は". $lesson. "の授業に参加しました。学籍番号：".  $this->studentId. "\n";
    }
}

$yamada = new Students(120, "山田");
$yamada->attend("PHP");
$yamada->attend("HTML");

//$thisはインスタンス（クラスを実体化したもの）。
//__constructはインスタンス化したときに引数を受け取ることができるため、異なるプロパティを持たせることができる。
//今回の$yamada->studentIdは、yamadaのidプロパティを指します。

?>
<?php
//Q5 定義済みクラス
$date = new DateTime("2021-03-02");
$prev_date = $date->modify("-1 month")->format("Y-m-d");
echo $prev_date. "\n";

$now = new DateTime();
$prev_date = new DateTime("1992-4-25");

echo $prev_date -> diff($now) -> format("あの日から%a日経過しました。 \n");

//diffメソッドは$prev_dateから呼ばれるのでDateTimeクラスに定義。
//ふたつの日付（$nowと$prev_date）の差を返す。
//formatメソッドはdiffメソッドがDateIntervalオブジェクトを返すので、DateIntervalクラスに定義。
//フォーマット済みの日付文字列を返すため、diffメソッドで返した差分の日数を返す。

?>