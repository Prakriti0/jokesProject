<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./add.css">
    <title>Document</title>
</head>
<body>
<div class="f">
    <form action="add.php" method="GET">
    <h1>ADD LASTEST NEWS</h1><br> 
        <label for="title"><b>TITLE:</b></label>
        <input type="text" name="title" placeholder= "enter title" required>
        <br> <br>
        <label for="imgurl"><b>IMGURL:</b></label>
        <input type="url" name ="imgsurl" placeholder="enter imgurl" required> <br>
        <label for="author"><b>AUTHOR:</b></label>
        <input type="text" name="author" placeholder="enter author"required><br>
        <br>
        <div class="b"><button type="submit">ADD</button></div>
    </form>
    </div>
</body>
</html>
