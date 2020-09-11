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

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="prism.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/default.min.css">
    <title>Codes uploaden</title>
</head>
<body>
<div id="con">
<form method="post" action="process.php" enctype="multipart/form-data">
<label><br><textarea id="code" name="code" rows="30" cols="200" maxlength="999"></textarea></label><br><br>
<input  type="submit" id="btn" name="submit" value="Send"/>
</form>
</div>
<script src="prism.js"></script>
</body>
</html>
