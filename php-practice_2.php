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

foreach($personalInfos as $x => $y) {
  echo $x+1 . "番目の". $y["name"]. "のメールアドレスは" . $y["mail"]. "で、電話番号は". $y['tel']. "です。\n";
}

$ageList= [25, 30, 18];

foreach($ageList as $index => $value){
    $personalInfos[$index]["age"] = $value;
}
var_dump($personalInfos);
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
echo "学籍番号". $yamada->studentId. "番の生徒は".$yamada->studentName . "です。\n";

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
    
    public function attend()
    {
        echo $this->studentName. "はPHPの授業に参加しました。学籍番号：".  $this->studentId. "\n";
    }
}

$yamada = new Students(120, "山田");
$yamada->attend("PHP");
?>
<?php
//Q5 定義済みクラス
$date = new DateTime("2021-03-02");
$prev_date = $date->modify("-1 month")->format("Y-m-d");
echo $prev_date. "\n";

$now = new DateTime();
$now_str = $now->format("Y-m-d");
$prev_date = new DateTime("1992-4-25");

echo $prev_date -> diff($now) -> format("あの日から%a日経過しました。 \n");
?>