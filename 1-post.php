<?php 
/* 
    Viết một lớp PHP 'Hình chữ nhật' có các thuộc tính về chiều dài và chiều rộng. 
    Thực hiện các phương pháp tính diện tích và chu vi hình chữ nhật. 
        - Diện tích: chiều dài x chiều rộng
        - Chu vi: (chiều dài + chiều rộng) x 2
*/
class Rectangle{
    private $length;
    private $width;    
    public function __construct($length,$width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function perimeter(){
        return ($this->length + $this->width) * 2;
    }

    public function acreage(){
        return $this->length * $this->width;
    }
}
$rectangle = new Rectangle(15,16);
echo "Chu vi: " . $rectangle->perimeter() . "<br>";
echo "Diện tích: " . $rectangle->acreage();


?>