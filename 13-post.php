<?php 
/* 
    Viết một lớp có tên 'Logger' với thuộc tính tĩnh gọi là 'logCount' để theo dõi số lượng thông điệp tường trình. 
    Thực hiện một phương pháp tĩnh để ghi lại tin nhắn
*/
class Logger{
    public static int $logCount = 0;

    public static function log($message){
        echo $message . "<br>";
        self::$logCount++;
    }
}
Logger::log('Logger message 1');
Logger::log('Logger message 2');
Logger::log('Logger message 3');
echo Logger::$logCount;
?>