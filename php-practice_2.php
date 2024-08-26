<?php
// Q1 tic-tac問題
for ($num = 1; $num <= 100; $num++) {
  if ($num % 4 ==0 && $num % 5 ==0)  {
      echo "tic-tac\n"; //4の倍数かつ5の倍数のときは tic-tac を出力。
  } elseif ($num % 4 ==0) {
      echo "tic\n"; //4の倍数のときは tic を出力。
  } elseif ($num % 5 ==0) {
      echo "tac\n"; //5の倍数のときは tac を出力。
  } else {
      echo $num. "\n"; //上記以外の数のときはそのままその数字を出力する。
  }
}

//Q2 多次元連想配列

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name']."の電話番号は".$personalInfos[1]['tel']."です。\n";

foreach ($personalInfos as $x => $y) {
  echo $x+1 . "番目の". $y['name']. "のメールアドレスは" . $y['mail']. "で、電話番号は". $y['tel']. "です。\n";
}

$ageList= [25, 30, 18];

foreach ($ageList as $index => $value){
    $personalInfos[$index]['age'] = $value;
}
var_dump($personalInfos);

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name){
        $this->studentId = $id;
        $this->studentName = $name;
        echo "学籍番号". $id. "番の生徒は".$name . "です。\n";
    }
    
    public function attend(){
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');

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

$yamada = new Students(120, '山田');
$yamada->attend('PHP');

//Q5 定義済みクラス
$now = new DateTime();
echo $now->format("Y-m-d \n");


$day = new DateTime('1992/4/25');

$diff = $day -> diff($now);
echo $diff -> format("あの日から%a日経過しました。 \n");
?>