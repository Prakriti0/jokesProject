<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
header('Content-Type:application/json');
    $servername="localhost";
    $username="root";
    $password="";
    $database="jokesdb";
    $conn = new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error){
        die("connection failed");
    }
    $title = $_GET['title'];
    $imgurl = $_GET['imgsurl'];
    $author= $_GET['author'];
    if($_SERVER['REQUEST_METHOD']=="GET"){
        $sql="INSERT INTO comedy(id,title,imgurl,author)VALUES(null,'$title','$imgurl','$author')";
        $result = $conn->query($sql);
        if($result === TRUE){
            header("Location:index.php");
        }
        else{
            echo ("could not insert");
        }
    }
    else{
        http_response_code(404);
        $response=array(
            "message"=>"error"
        );
        echo json_encode($response);
        die();
    }
  
    ?>
</body>
</html>
</body>
</html>
