<?php 
/* 
    Viết một lớp có tên 'Validation' bằng các phương thức tĩnh để xác thực địa chỉ email, password và các trường nhập thông thường khác.
*/
class Validation{
    public static function validateEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    public static function validatePassword($password) {
        return strlen($password) >= 8;
    }
}
$email = "admin@example.com";
$password = "p";

if (Validation::validateEmail($email)) {
    echo "Email is valid.</br>";
} else {
    echo "Email is invalid.</br>";
}

if (Validation::validatePassword($password)) {
    echo "Password is valid.</br>";
} else {
    echo "Password is invalid";
}
?>