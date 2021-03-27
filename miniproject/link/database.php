<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "cat";

      // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }
   $sql = "SELECT catID, catType, catDetail FROM cat";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
      // output data of each row 
      echo "<div class='row'>";
      while($row = $result->fetch_assoc()) {
         echo " <div class='col-sm-3'>"
            ."<h4>".$row["catType"]."</h4>" 
            .$row["catDetail"]. "<br>". "<br>"
            ."</div>";
      }
      echo "</div>";
      } else {
      echo "0 results";
      }
  
   $conn->close();

?>