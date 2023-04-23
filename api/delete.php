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
    $servername="localhost";
    $username="root";
    $password="";
    $database="jokesdb";
    $conn = new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error){
        die("connection failed");
    }
    if($_SERVER['REQUEST_METHOD']=="DELETE"){
        $id = $_GET['id'];
        $sql = "DELETE FROM comedy where id = $id";
        $res = $conn->query($sql);
        if($res === TRUE){
            echo("deleted successfully");
            header("Location:index.php");
        }
        else{
            echo ("cannot delete");
        }
    }
    else{
        include_once('common.php');
    }
   

    ?>
</body>
</html>