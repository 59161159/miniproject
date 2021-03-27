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
    <h1>ผลการค้นหา</h1>
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
    $search = $_POST['search'];
    if($search != ""){
    $sql = "SELECT catID, catType, catDetail FROM cat WHERE catID LIKE '%".$search."%' or catType LIKE '%".$search."%' or catDetail LIKE '%".$search."%' ";
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
    }else{
        echo "ไม่พบข้อมูลที่ต้องการ";
    }
   
?>
</div>
</body>
