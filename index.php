<!doctype html>
<html>
<head>
    <title>Tabellone scrutinio</title>
</head>
    
<body>
        <form align='center' action='result.php' method='POST'>
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
        </form>

</body>
</html>