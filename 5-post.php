<?php
/* 
    Viết một lớp PHP có tên là 'Vehicle' với các thuộc tính như 'brand', 'model' và 'year'. 
    Thực hiện một phương pháp để hiển thị các chi tiết xe. Nhấp vào tôi để xem giải pháp mẫu
*/
class Vehicle
{
    public $brand;
    public $model;
    public $year;
    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    public function views()
    {
        echo "Brand: " . $this->brand . "</br>";
        echo "Model: " . $this->model . "</br>";
        echo "Year: " . $this->year . "</br>";
    }
}
$vehicle = new Vehicle("Ford", "F-150", 2020);
$vehicle->views();
