<?php 
/*
    Viết một lớp có tên là 'Math' với các phương thức tĩnh như 'add()', 'subtract()' và 'multiply()'. 
    Sử dụng các phương pháp này để thực hiện các phép tính toán học. 
 */
class Math{
    // private static int $number1;
    // private static int $number2;
    public static function add($number1,$number2){
        return $number1 + $number2;
    }
    public static function subtract($number1,$number2){
        return $number1 * $number2;
    }
    public static function multiply($number1,$number2){
        return $number1 / $number2;
    }
}
echo "Phép tính cộng: " . Math::add("20","20") . "<br>";
echo "Phép tính nhân: " . Math::subtract("20","20") . "<br>";
echo "Phép tính chia: " . Math::multiply("20","20") . "<br>";
?>