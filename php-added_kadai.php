<?php
// 追加課題1
class Pokemon {

    public $name;
    public $element;

    public function __construct($name, $element)
    {
        $this -> name = $name;
        $this -> element = $element;
    }

    public function attack($skill) {

        echo "いけ、{$this -> element}ポケモン{$this -> name}！！{$skill}だ！！";

    }
}

$pokemon1 = new pokemon ("ピカチュウ", "ネズミ");
$pokemon1 -> attack("10万ボルト");

// var_dump($pokemon1);

// 追加課題2
// 社員の情報と出勤記録を管理するためのEmployeeクラスを作成してください。

class Employee {

    public int $employeeID;
    public string $employeeName;

    public function __construct($id, $name)
    {
        $this -> employeeID = $id;
        $this -> employeeName = $name;
    }

    public function checkIn() {

        echo "{$this -> employeeName}が出勤しました。社員ID：{$this -> employeeID}";

    }
}

$employee = new employee(1, "山田太郎");
$employee -> checkIn();

// var_dump($employee);

?>