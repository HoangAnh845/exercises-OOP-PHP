<?php
/* 
    Viết một lớp PHP có tên là 'ShoppingCart' với các thuộc tính như 'items' và 'total'. 
    Thực hiện các phương pháp thêm sản phẩm vào giỏ hàng và tính tổng chi phí.
*/
class ShoppingCart
{
    private $items;
    private $total;
    public function __construct()
    {
        $this->items = [];
        $this->total = 0;
    }

    public function addItem(string $item, int $price)
    {
        array_push($this->items, $item);
        $this->total += $price;
    }
    public function getIiems()
    {
        return $this->items;
    }
    public function getTotal()
    {
        return $this->total;
    }
}
$shoppingCart = new ShoppingCart();
$shoppingCart->addItem('MacBook', '500');
$shoppingCart->addItem('Phone', '1500');
print_r($shoppingCart->getIiems());
echo $shoppingCart->getTotal();
