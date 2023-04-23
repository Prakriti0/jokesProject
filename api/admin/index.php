<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <a href="./../admin/addform.php">add</a>
<div class="c">
<?php
   include ("./connection.php");
     $sql= "SELECT * FROM comedy ";
     $result= $conn->query($sql);
     if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            ?>
            <div class="box">
            <div class="innerbox">
            <div class="title" ><h2><?php echo $row['title']; ?></h2></div> <br>
            <div class="img">
            <img src="<?php echo $row["imgurl"];?>" alt="image">
            </div> <br>
            <div class="author">
                <?php echo $row['author'];?></div> <br>
            </div>
            <a href="./../delete.php?id=<?php echo $row['id'];?>"><span class="material-symbols-outlined">delete</span></a>
            </div>
            <?php
        }
     }
     $conn->close();
     ?>
     </div>
</body>
</html>
