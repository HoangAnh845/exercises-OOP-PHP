<?php
/* 
    Viết một lớp PHP có tên 'Circle' có thuộc tính bán kính. 
    Thực hiện các phương pháp tính diện tích và chu vi hình tròn.
        - Diện tích: Pi * bán kính^2 
        - Chu vi: 2 * Pi * bán kính
*/
class Circle
{
    private $radius;
    const PI = M_PI;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function acreage()
    {
        return self::PI * pow($this->radius, 2);
    }

    public function perimeter()
    {
        return 2 * self::PI * $this->radius;
    }
}
$circle = new Circle(15);
echo "Diện tích: " . $circle->acreage() . "<br>";
echo "Chu vi: " . $circle->perimeter();
