<?php
/* 
    Viết PHP phân cấp lớp cho hệ thống thư viện, bao gồm các lớp như 'LibraryItem', 'Book', 'Music'
    Triển khai các thuộc tính và phương thức phù hợp cho từng lớp.
*/
class LibraryItem
{
    protected $title;
    protected $author;
    protected $year;

    public function __construct($title, $author, $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getYear()
    {
        return $this->year;
    }
}

class Book extends LibraryItem{
    protected $genre;
    public function __construct($title, $author, $year,$genre)
    {
        parent::__construct($title, $author, $year);
        $this->genre = $genre;
    }

    public function displayDetails() {
        echo "Title: " . $this->title . "</br>";
        echo "Author: " . $this->author . "</br>";
        echo "Year: " . $this->year . "</br>";
        echo "Genre: " . $this->genre . "</br>";
    }
}

class Music extends LibraryItem{
    protected $album;
    public function __construct($title, $author, $year,$album)
    {
        parent::__construct($title, $author, $year);
        $this->album = $album;
    }

    public function displayDetails() {
        echo "Title: " . $this->title . "</br>";
        echo "Author: " . $this->author . "</br>";
        echo "Year: " . $this->year . "</br>";
        echo "Album: " . $this->album . "</br>";
    }
}


$book = new Book("Sách đắc nhân tâm","Dale Carnegie","1936","Tự giúp bản thân");
$book->displayDetails();

$music = new Music("Tình Sầu Thiên Thu Muôn Lối","Doãn Hiếu","2020","Tình Sầu Thiên Thu Muôn Lối");
$music->displayDetails();

