<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer Of Music Face</title>
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
</head>
<body>
<?php 
include "header.php"; 
?>
       

    <div>
        <center>
            <img src="img/COMF.png" alt="Descripción de la imagen" width=50%>
        </center>
    </div>
    <div>
        <center>
            <a href="login.php">
            <img id="myImage" onclick="changeImage()" src="img/start1.png" width=20% >
            
            <script>
             
            function changeImage() {
                var image = document.getElementById('myImage');
                if (image.src.match("bulbon")) {
                    image.src = "img/start1.png";
             
                } else {
                    image.src = "img/start.png";
             
                }
            }
             
            </script>
            </a>
        </center>
    </div>

   
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer Of Music Face</title>
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
</head>
<body>
<?php 
include "header.php"; 
?>
       

    <div>
        <center>
            <img src="img/COMF.png" alt="Descripción de la imagen" width=50%>
        </center>
    </div>
    <div>
        <center>
            <a href="login.php">
            <img id="myImage" onclick="changeImage()" src="img/start1.png" width=20% >
            
            <script>
             
            function changeImage() {
                var image = document.getElementById('myImage');
                if (image.src.match("bulbon")) {
                    image.src = "img/start1.png";
             
                } else {
                    image.src = "img/start.png";
             
                }
            }
             
            </script>
            </a>
        </center>
    </div>

   
</body>
>>>>>>> e21df3ea3d160f0a4e76f9d1206540c53d165ed7
</html>