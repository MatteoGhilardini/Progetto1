<!DOCTYPE html>
<html>
    <head>
        <title>Pagina di Inserimento Dati</title>
    	<meta name="author" content="Ghilardini Matteo">
		<meta name="keywords" content="Registrazione, Inserisci Dati">
		<meta name="description" content="Pagina per Inserimento Dati">
		<meta name="date" content="09.11.2018">
		<meta charset="UTF-8"> 
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
        <?php  
            session_start();
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                $_SESSION["name"]=htmlspecialchars($_POST['name']);
                $_SESSION["surname"]=htmlspecialchars($_POST['surname']);
                $_SESSION["date"]=htmlspecialchars($_POST['date']);
                $_SESSION["street"]=htmlspecialchars($_POST['street']);
                $_SESSION["civicnumber"]=htmlspecialchars($_POST['civicnumber']);
                $_SESSION["city"]=htmlspecialchars($_POST['city']);
                $_SESSION["cap"]=htmlspecialchars($_POST['cap']);
                $_SESSION["phone"]=htmlspecialchars($_POST['phone']);
                $_SESSION["mail"]=htmlspecialchars($_POST['mail']);
                $_SESSION["gender"]=htmlspecialchars($_POST['gender']);
                $_SESSION["hobby"]=htmlspecialchars($_POST['hobby']);
                $_SESSION["work"]=htmlspecialchars($_POST['work']);
            }
        ?>
        <center>
            <div class="main">
                <h1 class="title">Benvenuto, ora inserisci i tuoi dati</h1>
                <form method="post" action="" class="myData"> <!-- modified action -->
                    <h5>(I campi contrassegnati con <h4 class="redText">*</h4><h5> sono obbligatori.)</h5>
                    <br>
                    
                    <h4>Inserisci Nome:
                        <h4 class="redText">*</h4> 
                        <input type="text" maxlength="50" minlength="1" placeholder="Nome" name="name" id="name" class="fewText" required value="<?php 
                                if($_SESSION["name"]!=null && !preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["name"])){
                                    echo $_SESSION["name"];
                                }
                            ?>">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                if(empty($_SESSION["name"])){echo "<h4 class='redText'>Questo campo non può essere vuoto!</h4>";}
                                if (!preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["name"])==false) {
                                    echo "<h4 class='redText'>Questo campo può avere solo lettere!</h4>";
                                }
                            }
                        ?>
                    </h4>
                    <br>
                    <h4>Inserisci Cognome:
                        <h4 class="redText">*</h4> 
                        <input type="text" maxlength="50" minlength="1" placeholder="Cognome" name="surname" id="surname" class="fewText" required value="<?php 
                                if($_SESSION["surname"]!=null && !preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["surname"])){
                                    echo $_SESSION["surname"];
                                }
                            ?>">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                if(empty($_SESSION["surname"])){echo "<h4 class='redText'>Questo campo non può essere vuoto!</h4>";}
                                if (!preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["surname"])==false) {
                                    echo "<h4 class='redText'>Questo campo può avere solo lettere!</h4>";
                                }
                            }
                        ?>
                    </h4>
                    <br>
                    <h4>Inserisci Data di Nascita:
                        <h4 class="redText">*</h4> 
                        <input type="date" placeholder="Date" name="date" id="date" class="fewText" required value="<?php 
                                if($_SESSION["date"]!=null && date("Y-m-d")>=$_SESSION["date"]){
                                    echo $_SESSION["date"];
                                }
                            ?>">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                if(empty($_SESSION["date"])){echo "<h4 class='redText'>Questo campo non può essere vuoto!</h4>";}
                                if (date("Y-m-d")<$_SESSION["date"]) {
                                    echo "<h4 class='redText'>Non sei ancora nato?</h4>";;
                                }
                            }
                        ?>
                    </h4>
                    <br>
                    <h4>Inserisci Via:
                        <h4 class="redText">*</h4> 
                        <input type="text" maxlength="50" minlength="1" placeholder="Via" name="street" id="street" class="fewText" onfocus="writeTextInImput(this.id,'Via ')" onclick="writeTextInImput(this.id,'Via ')" required value="<?php 
                                if($_SESSION["street"]!=null && !preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["street"])){
                                    echo $_SESSION["street"];
                                }
                            ?>">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                if(empty($_SESSION["street"])){echo "<h4 class='redText'>Questo campo non può essere vuoto!</h4>";}
                                if (!preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["street"])==false) {
                                    echo "<h4 class='redText'>Questo campo può avere solo lettere!</h4>";
                                }
                            }
                        ?>
                    </h4>
                    <br>
                    <h4>Inserisci Numero Civico:
                        <h4 class="redText">*</h4> 
                        <input type="text" maxlength="4" minlength="1" placeholder="Numero Civico" name="civicnumber" id="civicnumber" class="fewerText" required value="<?php 
                                if($_SESSION["civicnumber"]!=null && !preg_match('/^[0-9]+?[a-zA-Z]{1}$/', $_SESSION["civicnumber"])){
                                    echo $_SESSION["civicnumber"];
                                }
                            ?>">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                if(empty($_SESSION["civicnumber"])){echo "<h4 class='redText'>Questo campo non può essere vuoto!</h4>";}
                                if (!preg_match('/[^[0-9]+?[a-zA-Z]{1}$/', $_SESSION["civicnumber"])==false) {
                                    echo "<h4 class='redText'>Solo l'ultimo carattere può essere una lettera!</h4>";
                                }
                            }
                        ?>
                    </h4>
                    <br>
                    <h4>Inserisci Città di Domicilio:
                        <h4 class="redText">*</h4> 
                        <input type="text" maxlength="50" minlength="1" placeholder="Città" name="city" id="city" class="fewText" required value="<?php 
                                if($_SESSION["city"]!=null && !preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["city"])){
                                    echo $_SESSION["city"];
                                }
                            ?>">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                if(empty($_SESSION["city"])){echo "<h4 class='redText'>Questo campo non può essere vuoto!</h4>";}
                                if (!preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["city"])==false) {
                                    echo "<h4 class='redText'>Questo campo può avere solo lettere!</h4>";
                                }
                            }
                        ?>
                    </h4>
                    <br>
                    <h4>Inserisci Codice d'Avviamento Postale:
                        <h4 class="redText">*</h4> 
                        <input type="text" maxlength="5" minlength="3" placeholder="NAP" name="cap" id="cap" class="fewerText" required value="<?php 
                                if($_SESSION["cap"]!=null && !preg_match('/[^0-9]/', $_SESSION["cap"])){
                                    echo $_SESSION["cap"];
                                }
                            ?>">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                if(empty($_SESSION["cap"])){echo "<h4 class='redText'>Questo campo non può essere vuoto!</h4>";}
                                if (!preg_match('/[^0-9]/', $_SESSION["cap"])==false) {
                                    echo "<h4 class='redText'>This field can contain only number!</h4>";
                                }
                            }
                        ?>
                    </h4>
                    <br>
                    <h4>Inserisci Numero di Telefono:
                        <h4 class="redText">*</h4> 
                        <input type="text" maxlength="20" minlength="10" placeholder="Telefono" name="phone" id="phone" class="fewText" required value="<?php 
                                if($_SESSION["phone"]!=null && !preg_match('/^[+]{1}+[0-9]$/', $_SESSION["phone"])){
                                    echo $_SESSION["phone"];
                                }
                            ?>">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                if(empty($_SESSION["phone"])){echo "<h4 class='redText'>Questo campo non può essere vuoto!</h4>";}
                                if (!preg_match('/^[+]{1}[0-9]$/', $_SESSION["phone"])==false) {
                                    echo "<h4 class='redText'>Questo campo può contenere solo cifre, + (come primo carattere) e spazzi bianchi!</h4>";
                                }
                            }
                        ?>
                    </h4>
                    <br>
                    <h4>Inserisci E-Mail:
                        <h4 class="redText">*</h4> 
                        <input type="mail" maxlength="50" placeholder="E-Mail" name="mail" id="mail" class="fewText" required value="<?php 
                                if($_SESSION["mail"]!=null && filter_var($_SESSION["mail"], FILTER_VALIDATE_EMAIL)){
                                    echo $_SESSION["mail"];
                                }
                            ?>">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                if(empty($_SESSION["mail"])){echo "<h4 class='redText'>Questo campo non può essere vuoto!</h4>";}
                                if (filter_var($_SESSION["mail"], FILTER_VALIDATE_EMAIL)==false) {
                                    echo "<h4 class='redText'>This is not a valid mail.</h4>";
                                }
                            }
                        ?>
                        </h4>
                    <br>

                    <h4>Inserisci Sesso: <h4 class="redText">*</h4>
                        <label class="fewTextRadio">
                            <label class="radioButton"><input type="radio" name="gender" value="nothing" id="nothing" checked> Non specificato</label>
                            <label class="radioButton"><input type="radio" name="gender" value="male" id="maleGender" <?php if($_SESSION["gender"]=="male"){echo "checked";}?>> Maschio</label>
                            <label class="radioButton"><input type="radio" name="gender" value="female" id="femaleGender" <?php if($_SESSION["gender"]=="female"){echo "checked";}?>> Femmina</label>
                        </label>
                    </h4>
                    <br>
                    <center>
                    <h4>Possiedi un Hobby? 
                        <textarea maxlength="500" placeholder="Hobby" name="hobby" id="hobby" class="manyText" ><?php echo $_SESSION["hobby"];?></textarea>
                    </h4>
                    <h4>Possiedi un Lavoro? 
                        <textarea maxlength="500" placeholder="Lavoro" name="work" id="work" class="manyText"><?php echo $_SESSION["work"];?></textarea>
                    </h4>
                    <br>
                        <input type="button" name="cancella" value="Cancella" class="deleteButton" onclick="deleteParameters()">
                        <input type="submit" name="submit" value="Avanti" class="submitButton">
                        <script>
                            function deleteParameters(){
                                document.getElementById("name").value=null;
                                document.getElementById("surname").value=null;
                                document.getElementById("date").value=null;
                                document.getElementById("street").value=null;
                                document.getElementById("civicnumber").value=null;
                                document.getElementById("city").value=null;
                                document.getElementById("cap").value=null;
                                document.getElementById("phone").value=null;
                                document.getElementById("mail").value=null;
                                document.getElementById("nothing").checked=true;
                                document.getElementById("hobby").value=null;
                                document.getElementById("work").value=null;
                            }
                            function writeTextInImput(id,text){
                                if(document.getElementById(id).value==""){
                                    document.getElementById(id).value=text;
                                }
                            }
                        </script>
                    </center>
                </form>
            </div>
        </center>
        <?php
            $continue=0;

            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                if (!preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["name"])) { $continue++; }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                if (!preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü\']/', $_SESSION["surname"])) { $continue++; }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                if (date("Y-m-d")>=$_SESSION["date"]) { $continue++; }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                if (!preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["street"])) { $continue++; }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                if (!preg_match('/[^[0-9]+?[a-zA-Z]{1}$/', $_SESSION["civicnumber"])) { $continue++; }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                if (!preg_match('/[^A-Z a-zàèìòùáéíóúâêîôûäëïöü]/', $_SESSION["city"])) { $continue++; }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                if (!preg_match('/[^0-9]/', $_SESSION["cap"])) { $continue++; }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                if (!preg_match('/^[+]{1}+[0-9]$/', $_SESSION["phone"])) { $continue++; }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                if (filter_var($_SESSION["mail"], FILTER_VALIDATE_EMAIL)) { $continue++; }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                if($continue>=9){
                    //http://.../checkDataPage.php
                    echo "<script>
                        window.location.replace('checkDataPage.php');
                    </script>";
                }else{
                    $continue=0;
                }
            }
        ?>
    </body>
</html>