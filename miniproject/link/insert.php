<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>miniproject cat</title>

    <style>
      .row > div {
        background: lightblue;
        border: 1px solid black;
        height: 200px;
    }
    </style>
    
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.html">CAT Shop</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.html">Home</a></li>
        <li><a href="add.html">Add+</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
  <form action="link/search.php" method="post">
        <label for="search">ค้นหา : </label>
        <input type="text" id="search" name="search"  placeholder="ใส่คำที่ต้องการค้นหา">
        <input type="submit" value="ค้นหา" class="btn btn-primary">
    </form><br>
    <div id="demo"></div>
  </div>
    <script>
        var xmlhttp = new XMLHttpRequest();
        var obj,show;
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            show = document.getElementById("demo");
            show.innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "database.php", true);
        xmlhttp.send();
        </script>
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
$catID = $_POST['catID'];
$catType = $_POST['catType'];
$catDetail = $_POST['catDetail'];

if($catID !="" && $catType !="" && $catDetail !=""){
  $sql = "INSERT INTO cat (catID, catType, catDetail) VALUES ('$catID', '$catType', '$catDetail')";
}
$conn->close();

?>
</div>
</body>
