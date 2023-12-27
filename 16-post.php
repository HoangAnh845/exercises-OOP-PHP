<?php
/* 
    Viết một lớp PHP có tên là 'Calculator' có thuộc tính riêng được gọi là 'result'. 
    Thực hiện các phương pháp để thực hiện các phép tính số học cơ bản như cộng và trừ.
*/
class Calculator
{
    static private int $result = 0;

    public function add($number)
    {
        return self::$result += $number;
    }
    public function subtract($number)
    {
        return self::$result -= $number;
    }
}
$calculator = new Calculator();
echo $calculator->add(20);
echo $calculator->subtract(10);
