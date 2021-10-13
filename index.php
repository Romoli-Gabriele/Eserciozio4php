<!doctype html>
<html>
<head>
    <title>Tabellone scrutinio</title>
</head>
    
<body>
    <?php
        $termina = false;
        $risultati ="";
        $debiti = 0;
        $materiedebiti = "";
        $gen ="";
        echo "<form align='center' action='index.php' method='POST'>
        <br> 
        Nominativo: <input type='text' name='nominativo'/>
        <br><br>
        Genere: <input type='radio' name='genere' value='M'/> M
                <input type='radio' name='genere' value='F'/> F
        <br><br>
        Debiti: <input type='checkbox' name='italiano'/> ITA
        <input type='checkbox' name='matematica'/> MAT
        <input type='checkbox' name='telecomunicazioni'/> TEL
        <input type='checkbox' name='informatica'/> INF
        <br><br>
        <input type='submit' value='Esito scrutinio'/>
        <input type='hidden' value='$risultati'>
        </form>";
        if(isset($_POST)){
        if($_POST["genere"] == "M"){
            $gen="o";
        }else{
            $gen="a";
        }
        if(isset($_POST["italiano"])){
            $debiti ++;
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
            $risultati.("Risultato di ").$_POST["nominativo"].(": <b>").("ammess").$gen.("</b><br>");
        }else if($debiti < 3 && $debiti > 0){
            $risultati.("Risultato di ").$_POST["nominativo"].(": <b>").("ammess").$gen.("</b> con debiti in ").$materiedebiti.("<br>");
        }else{
            $risultati.("Risultato di ").$_POST["nominativo"].(": <b>").("non ammess").$gen.("</b><br>");
        }
        if(!isset($_POST["nominativo"])){
            echo "<h1>Errore: manca il nome dello studente</h1><br>
            <a href='index.php'></a>";

        }else if($termina){
            echo"$risultati";

        }
        
        echo"$risultati";
    }
    ?>
</body>
</html>