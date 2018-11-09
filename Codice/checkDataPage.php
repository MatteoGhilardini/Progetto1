<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css.css">
        <style>
            h4{
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <?php  
            session_start();
        ?>
        <center>
            <div class="main">
                <h1 class="title">Controlla se i dati inseriti sono corretti</h1>

                <form method="post" action="" class="myData">
                    <h4>Inserisci Nome:
                        <h4></h4>  
                        <input type="text" class="fewTextCheck" readonly value="<?php echo $_SESSION["name"];?>">
                    </h4>
                    <br>
                    <h4>Inserisci Cognome:
                        <h4></h4>  
                        <input type="text" class="fewTextCheck" readonly value="<?php echo $_SESSION["surname"]?>">
                    </h4>
                    <br>
                    <h4>Inserisci Data di Nascita:
                        <h4></h4>  
                        <input type="date" class="fewTextCheck" readonly value="<?php echo $_SESSION["date"]?>">
                    </h4>
                    <br>
                    <h4>Abiti in:
                        <h4></h4>  
                        <input type="text" class="fewTextCheck" readonly value="<?php 
                            echo $_SESSION["street"]." ".$_SESSION["civicnumber"].", a ".$_SESSION["city"]." [".$_SESSION["cap"]."]"?>">
                    </h4>
                    <br>
                    <h4>Inserisci Numero di Telefono:
                        <h4></h4>  
                        <input type="text" class="fewTextCheck" readonly value="<?php echo $_SESSION["phone"]?>">
                    </h4>
                    <br>
                    <h4>Inserisci E-Mail:
                        <h4></h4>  
                        <input type="mail" class="fewTextCheck" readonly value="<?php echo $_SESSION["mail"]?>">
                    </h4>
                    <br>
                    <h4>Inserisci Sesso: 
                        <h4></h4> 
                        <input type="text" class="fewTextCheck"readonly value="<?php 
                                 if($_SESSION["gender"]=="male"){
                                    echo "Maschio";
                                }else if($_SESSION["gender"]=="female"){
                                    echo "Femmina";
                                }else{
                                    echo "Non Specificato";
                                }
                            ?>">
                    </h4>
                    <br>
                    <h4>Possiedi un Hobby? 
                        <textarea class="manyTextCheck" readonly><?php echo $_SESSION["hobby"];?></textarea>
                    </h4>
                    <h4>Possiedi un Lavoro? 
                        <textarea class="manyTextCheck" readonly><?php echo $_SESSION["work"];?></textarea>
                    </h4>
                    <br><br>
                    <center>
                        <input type="button" name="correggi" value="Correggi" class="deleteButton" onclick="window.location.href='registrationPage.php'">
                        <input type="submit" name="submit" value="Registrati" class="submitButton">
                    </center>
                </form>
            </div>
        </center>
        <?php
            $textToPull=date("H:i:s").";".date("Y-m-d").
                        ";".$_SESSION["name"].";".$_SESSION["surname"].
                        ";".$_SESSION["date"].";".$_SESSION["street"].
                        ";".$_SESSION["civicnumber"].";".$_SESSION["city"].
                        ";".$_SESSION["cap"].";".$_SESSION["phone"].
                        ";".$_SESSION["mail"].";".$_SESSION["gender"].
                        ";".$_SESSION["hobby"].";".$_SESSION["work"];

            $textToPull=explode(";",$textToPull);

            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                //create folder if not exists
                if (!file_exists("Registrazioni")) {
                    mkdir("Registrazioni", 0777, true);
                }
                //move to folder
                chdir("Registrazioni");

                $todayRegistrationFileName="Registrazioni_".date("Y-m-d").".csv";

                //create or open csv files
                $allRegistrationFile=fopen("Registrazioni_tutte.csv","a");
                $todayRegistrationFile=fopen($todayRegistrationFileName,"a");

                //write in the csv
                fputcsv($allRegistrationFile, $textToPull);
                fputcsv($todayRegistrationFile, $textToPull);
                
                //close csv files
                fclose($allRegistrationFile);
                fclose($todayRegistrationFile);
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                //http://.../todayRegistrationSummary.php
                echo "<script>
                    window.location.replace('todayRegistrationSummary.php');
                </script>";
            }
        ?>
    </body>
</html>