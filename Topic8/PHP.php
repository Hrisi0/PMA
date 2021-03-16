<?php
class News {
         
   public function articles() {
        $servername = "localhost";
        $username = "grigorov";
        $password = "password";
        $dbname = "webcafe";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection with the DB failed: " . $conn->connect_error);
        }
        $tittle = "Covid19";
        $author = "Dzhurelova";
        $data = "2021-03-13";
        $resume = "Задава се Трета вълна на Covid19....";
        $fulltext = "Трета вълна на Covid19 е факт. Прекратява се присъственото образование на учениците.Фитнесите се затварят...";
        $urlpic = "https://image.shutterstock.com/shutterstock/photos/1677370084/display_1500/stock-vector-realistic-medical-face-mask-details-d-medical-mask-vector-illustration-1677370084.jpg";
        
        $sql = "INSERT INTO Articles (title, author, data, resume, fulltext, URLpic)
        VALUES ($tittle, $author, $data, $resume, $fulltext, $urlpic )";
        
        if ($conn->query($sql) === TRUE) {
          print "Successfully saved to database";
        } else {
          print "Error: " . $sql . $conn->error;
        }

   }
}

?>
