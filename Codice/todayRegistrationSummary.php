<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="checkData.js"></script> 
        <style>
            h4{
                margin-bottom: 5px;
            }
        </style>
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
            <div class="main" style="width:70%">
                <h1 class="title">Ecco i dati inseriti il <?php echo date("d-m-Y")?></h1>

                <form method="post" action="" class="myData">
                    <table>
                        <tr>
                            <th>Ora Registrazione</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Data di Nascita</th>
                            <th>Abitazione</th>
                            <th>Telefono</th>
                            <th>E-Mail</th>
                            <th>Sesso</th>
                            <th>Hobby</th>
                            <th>Lavoro</th>
                        </tr>
                        <?php
                            if (file_exists("Registrazioni")) {
                                chdir("Registrazioni");
                                $todayRegistrationFileName="Registrazioni_".date("Y-m-d").".csv";

                                if (file_exists($todayRegistrationFileName)) {
                                    $csvFile = file($todayRegistrationFileName);
                                    $data;
                                    foreach ($csvFile as $line) {
                                        $data= str_getcsv($line);
                                        $time=$data[0];
                                        $name=$data[2];
                                        $surname=$data[3];
                                        $date=$data[4];
                                        $living=$data[5]." ".$data[6].", a ".$data[7]." [".$data[8]."]";
                                        $phone=$data[9];
                                        $mail=$data[10];
                                        $sex=$data[11];
                                        $hobby=$data[12];
                                        $lavoro=$data[13];
                                        echo "
                                            <tr>
                                                <td>".$time."</td>
                                                <td>".$name."</td>
                                                <td>".$surname."</td>
                                                <td>".$date."</td>
                                                <td>".$living."</td>
                                                <td>".$phone."</td>
                                                <td>".$mail."</td>
                                                <td>".$sex."</td>
                                                <td>".$hobby."</td>
                                                <td>".$lavoro."</td>
                                            </tr>
                                        ";
                                    }
                                }else{
                                    echo "</table><h2 class='redText'>File non trovato per data ".date("d-m-Y").".</h2>";
                                }
                            }else{
                                echo "</table><h2 class='redText'>Cartella non trovata.</h2>";
                            }
                        ?>
                    </table>
                    <br>
                    <center>
                        <input type="button" name="correggi" value="Inserisci nuovi dati" class="submitButton" onclick="window.location.href='registrationPage.php'">
                    </center>
                </form>
            </div>
        </center>
    </body>
</html>