<?php
/* 
    Viết một lớp tên là 'Employee' mở rộng lớp 'Person' và thêm các thuộc tính như 'salary' và 'postion'. 
    Thực hiện các phương pháp để hiển thị thông tin chi tiết của nhân viên.
*/
class Person
{
    protected string $name;
    protected int $age;
    protected int $phone;
    protected string $address;
    public function __construct($name, $age, $phone, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getPerson(){
        echo "Họ và tên: " . $this->name . "</br>";
        echo "Tuổi: " . $this->age . "</br>";
        echo "Số điện thoại: " . $this->phone . "</br>";
        echo "Địa chỉ: " . $this->address . "</br>";
    }
}
class Employee extends Person
{
    private string $salary;
    private string $postion;
    public function __construct($name, $age, $phone, $address, $salary, $postion)
    {
        parent::__construct($name, $age, $phone, $address);
        $this->salary = $salary;
        $this->postion = $postion;
    }
    public function __toString()
    {
        return parent::getPerson().
        'Lương:' . $this->salary . "</br>" .
        'Vị trí:' . $this->postion . "</br>";
    }
}

// $person = new Person('Hoàng Anh', '23', '0963868645', 'Hà Nội');
// $person->getPerson();

$employee = new Employee('Hoàng Anh', '23', '0963868645', 'Hà Nội', '1000$', 'Nhân viên');
echo $employee;
