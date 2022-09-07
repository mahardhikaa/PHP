<?php 
//Non static
class nonStatic {
    public $index;

    public function getIndex(){
        return "Index: " . $this->$index++; //self
    }
}

class contohStatic {
    public static $index;

    public static function getIndex() {
        return "Index: " . self::$index++;
    }
}

//panggil tanpa object (hanya yang menggunakan static)
contohStatic::$index = 1;

echo contohStatic::getIndex();
echo "<br>";
echo contohStatic::getIndex();
echo "<br>";
echo contohStatic::getIndex();
echo "<br>";
echo contohStatic::getIndex();
echo "<br>";

?>