<?php
// Q1 tic-tac問題
function countUp () {

    for ($i = 1; $i <= 100; $i++) {

        switch (true) {
            case ($i % 4 === 0 && $i % 5 === 0):

                echo "tic-tac \n";
                break;

                    case ($i % 4 === 0):

                        echo "tic \n";
                        break;

                            case ($i % 5 === 0):

                                echo "tac \n";
                                break;

                                    default:

                                        echo $i;
                                        echo "\n";
                                        break;

        }
    }

}

countUp ();
echo "\n";

// Q2 多次元連想配列
// 問題1
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

echo $personalInfos[1]["name"]."の電話番号は".$personalInfos[1]["tel"]."です。";

// var_dump($personalInfos[1]);


// 問題2
foreach ($personalInfos as $personalInfo => $value){
        $number = $personalInfo + 1;

        echo $number."番目の".$value["name"]."のメールアドレスは".$value["mail"]."で、電話番号は".$value["tel"]."です。\n";

}


// 問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $personalInfo){

    $personalInfos[$index]["age"] = $ageList[$index];

}

// var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
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
        echo '授業に出席しました。';
    }
}

$student1 = new Student(10, "東子");

echo "学籍番号{$student1 -> studentId}番の生徒は{$student1 -> studentName}です。\n";


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo "{$this -> studentName}は{$subject}の授業に参加しました。学籍番号：{$this-> studentId}\n";
    }
}

$student1 = new Student(10, "東子");
$student1 -> attend("PHP");


// Q5 定義済みクラス
// 問題1
$date = new DateTime();
$date -> modify("-1 month");
echo $date -> format("Y-m-d");


// 問題2
$date1 = new DateTime();
$date2 = new DateTime("1992-04-25");
$diff = $date1 -> diff($date2);

echo "あの日から{$diff -> days}日経過しました。";

?>