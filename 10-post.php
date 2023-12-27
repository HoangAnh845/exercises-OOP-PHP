<?php
/* 
    Viết một lớp PHP có tên là 'Person' với các thuộc tính như 'name' và 'age'. 
    Triển khai magic method '__toString()' để hiển thị thông tin người dùng
    __toString() trả về nội dung chuỗi của một phần tử.
*/
class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        return "Name: " . $this->name . "</br>" .
            "Age: " . $this->age . "</br>";
    }
}

$person = new Person("Natalius Esther", 30);
echo $person;
