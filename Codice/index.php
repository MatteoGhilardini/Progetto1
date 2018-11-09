<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="checkData.js"></script> 
    </head>
    <body>
        <?php
            session_start();
            $_SESSION["name"]=null;
            $_SESSION["surname"]=null;
            $_SESSION["date"]=null;
            $_SESSION["street"]=null;
            $_SESSION["civicnumber"]=null;
            $_SESSION["city"]=null;
            $_SESSION["cap"]=null;
            $_SESSION["phone"]=null;
            $_SESSION["mail"]=null;
            $_SESSION["gender"]=null;
            $_SESSION["hobby"]=null;
            $_SESSION["work"]=null;
        ?>
        <center>
            <div class="main">
                <h1 class="benvenuto">Benvenuto</h1> 
                    <h1 class="benvenuto2">Clicca il pulsante per continuare</h1>
                <a href="registrationPage.php"><button>Registrati</button></a>      
            </div>
        </center>
    </body>
</html>