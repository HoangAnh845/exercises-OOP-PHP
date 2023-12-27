<?php
/* 
    Viết một lớp PHP có tên là 'Student' với các thuộc tính như 'name', 'age' và 'class'. 
    Thực hiện phương pháp hiển thị thông tin sinh viên.
*/
class Student
{
    public $name;
    public $age;
    public $class;
    public function __construct($name, $age, $class)
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function displayDetails(){
        echo "My name is " . $this->name . "</br>";
        echo "I am " . $this->age . "years old" . "</br>";
        echo "I study " . $this->class . "</br>";
    }
}
$student = new Student('Hoàng Anh','11','6A1');
$student->displayDetails();
