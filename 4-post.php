<?php
/* 
    Viết giao diện PHP có tên 'Resizable' bằng phương thức 'resize()'. 
    Triển khai giao diện 'Resizable' trong lớp có tên 'Square' và thêm chức năng để thay đổi kích thước hình vuông. 
*/
interface Resizable
{
    public function resize($size);
}
class Square implements Resizable
{
    private $length = 10;
    private $width = 10;
    private $size;
    public function __construct($size)
    {
        $this->size = $size;
    }
    public function resize($size)
    {
        $this->length = $this->length + $size;
        $this->width = $this->width + $size;
    }
    public function CalculateArea()
    {
        return $this->length * $this->width;
    }
}

$square = new Square(20);
$square->resize(10);
echo "LOG___" . $square->CalculateArea();
