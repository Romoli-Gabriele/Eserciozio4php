<html>

<head>
    <title>Risultati</title>
</head>

<body>
    <?php
        
        session_start();
        
        $debiti = 0;
        $materiedebiti = "";
        if(!isset($_POST["nominativo"])){
            echo "<h1>Errore: manca il nome dello studente</h1><br>
            <a href='index.php'>Reinserisci lo studente</a>";

        }else if(!isset($_POST["genere"])){
            echo "<h1>Errore: manca il genere dello studente</h1><br>
            <a href='index.php'>Reinserisci lo studente</a>";

        }else{
            
        if($_POST["genere"] == "M"){
            $genere="o";
        }else{
            $genere="a";
        }
        if(isset($_POST["italiano"])){
            $debiti++;
            $materiedebiti = $materiedebiti.(" Italiano,");
        }
        if(isset($_POST["matematica"])){
            $debiti ++;
            $materiedebiti = $materiedebiti.(" Matematica,");
        }
        if(isset($_POST["telecomunicazioni"])){
            $debiti ++;
            $materiedebiti = $materiedebiti.(" Telecomunicazioni,");
        }
        if(isset($_POST["informatica"])){
            $debiti ++;
            $materiedebiti = $materiedebiti.(" Informatica,");
        }
        if($debiti == 0){
            $_SESSION["risultati"] = $_SESSION["risultati"]."Risultato di ".$_POST["nominativo"].": <b>"."ammess".$genere."</b><br>";
        }else if($debiti < 3 && $debiti > 0){
            $_SESSION["risultati"] = $_SESSION["risultati"].("Risultato di ").$_POST["nominativo"].(": <b>").("ammess").$genere.("</b> con debiti in ").$materiedebiti.("<br>");
        }else{
            $_SESSION["risultati"] = $_SESSION["risultati"].("Risultato di ").$_POST["nominativo"].(": <b>").("non ammess").$genere.("</b><br>");
        }
        
        echo $_SESSION["risultati"];
        
        echo' <br> <a href="index.php">Inserisci un nuovo utente</a><br>
        <a href="termina.php">Termina scrutinio</a>
        ';
        
        }
    
    ?>

</body>

</html>