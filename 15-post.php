<?php
/* 
    Viết một lớp PHP có tên là 'File' với các thuộc tính như 'name' và 'size'. 
    Thực hiện một phương pháp tĩnh để tính tổng kích thước của nhiều tệp. 
*/
class File
{
    private string $name;
    private int $size;
    public function __construct($name, $size)
    {
        $this->name =  $name;
        $this->size =  $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public static function calculateTotalSize($files)
    {
        $totalSize = 0;
        foreach ($files as $file) {
            if ($file instanceof File) {
                $totalSize += $file->getSize();
            }
        }
        return $totalSize;
    }
}

$file1 = new File('file1.txt', 1000);
$file2 = new File('file2.txt', 2000);
$file3 = new File('file3.txt', 3000);
$files = array($file1, $file2, $file3);
$totalSize = File::calculateTotalSize($files);

echo "Tổng số size của tất cả file là: " . $totalSize;
