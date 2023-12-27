<?php 
/* 
    Viết một lớp PHP có tên là 'Shape' với phương thức trừu tượng 'CalculateArea()'. 
    Tạo hai lớp con, 'Triangle' và 'Rectangle', triển khai phương thức 'CalculateArea()'.
        - Diện tích hình chữ nhật: chiều dài x chiều rộng
        - Diện tích tam giác: 1/2 * (a.h)
*/
abstract class Shape
{
    abstract public function CalculateArea();
}
class Triangle extends Shape
{
    private $base;
    private $height;
    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }
    public function CalculateArea()
    {
        return  0.5 * $this->base * $this->height;
    }
}
class Rectangle extends Shape
{
    private $length;
    private $width;
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function CalculateArea()
    {
        return  $this->length * $this->width;
    }
}

$triangle = new Triangle(5, 7);
echo "Triangle Area: " . $triangle->calculateArea() . "</br>";

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() . "</br>";

?>