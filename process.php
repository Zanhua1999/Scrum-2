<?php
require 'connect.php';


if(isset($_POST['submit'])) {

    $code = $_POST['code'];


 $sql = "INSERT INTO codes SET code=?";
 $stmt = $pdo->prepare($sql);
 $stmt ->bindParam("", $code);
 $stmt->execute([$code]);
}

?>

<?php
$db_Type = "mysql";
$host = "localhost";
$dbName = "pastecode";
$userName = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $userName, $password);
    echo "<h1> Codes uploaden</h1>";
} catch(PDOExeption $e) {
    echo $e->getMessage();
}


echo '<br>';
    $lastid = $pdo->lastInsertId();
    echo "<a href='codes.php?id=$lastid'>Bekijk details</a>" . '<br>';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<a href="index.php">Terug naar Home</a>
</body>
</html>
    
