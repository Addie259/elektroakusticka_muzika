<?php
class Autor {
    public static function getAutor(){ 
    $conn = Database::getInstance();
    $stmt = $conn->query('SELECT * FROM autor');
    $stmt->fetch();
    foreach ($stmt as $row)
        {
        echo "<ul style='list-style: none;'>";
        echo "<li><b>" . $row['ime'] . " "; 
        echo $row['prezime'] . "</b></li></br>";
        echo "<li>" . $row['biografija'] . " "; 
        echo $row['stvaralastvo'] . "</li></ul>";
                                                 }
                
}
}

$autor = Autor::getAutor();
echo $autor;