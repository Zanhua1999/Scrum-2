<?php
$dbHost = 'localhost';
$dbName = 'pastecode';
$dbUser = 'root';
$dbPass = '';

function createConn() {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=pastecode", 'root');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOExeption $e) {
        echo $e->getMessage();
    }

    return $conn;
}

function firedb($sql, $conn=null, $method="SELECT") {
    if ($conn == null) {
        $conn = createConn();
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($method == "SELECT") {
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return array("result"=>$stmt->fetchAll(), "conn"=>$conn);
    } elseif ($method == "INSERT") {
        $id = $conn->lastInsertId();
        return array("conn" => $conn, "id" => $id);
    }
    else {
        return array("conn" => $conn);
    }
}

$result = firedb("SELECT * FROM codes WHERE ID =" . $_GET['id'])['result'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/default.min.css">
</head>
<body>
<pre>
<code>
<?php  
require 'connect.php';
if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
}

$sql = ("SELECT * FROM codes WHERE ID=:id");
$stmt = $pdo->prepare($sql);
$stmt->execute(array(':id' => $id));
foreach ($stmt as $row ) {
    $code =htmlspecialchars ($row['code']);
}
 echo $code . '<br>';

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    echo $url;  
  ?>  
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script> 
  </code>
  </pre>
</body>
</html>