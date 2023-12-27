<?php
/* 
    Viết một lớp tên là 'Product' với các thuộc tính như 'name' và 'price'. 
    Triển khai interface 'Comparable' để so sánh các sản phẩm dựa trên giá của chúng.
*/
interface Comparable
{
    public function compareTo($other);
}
class Product implements Comparable
{
    private string $name;
    private int $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function compareTo($other)
    {
        if ($other instanceof Product) {
            // Giá sp laptop so sanh giá sp phone
            if ($this->getPrice() > $other->getPrice()) {
                return "Đắt hơn";
            } else if ($this->getPrice() < $other->getPrice()) {
                return "Rẻ hơn";
            } else {
                return "Bằng nhau";
            }
        } else {
            throw new Exception('Đối tương so sánh không hợp lệ');
        }
    }
    public function __toString()
    {
        $phone = new Product('iPhone 15 Pro Max', '1300');
        return "Sản phẩm " . $this->name . " có giá thành ".
        $this->compareTo($phone) . " so với sản phẩm iPhone 15 Pro Max";
    }
}

$laptop = new Product('MacBook', '700');
// $phone = new Product('iPhone 15 Pro Max', '1300');
// echo "Hello";
// echo $laptop->compareTo($phone);
echo $laptop;
