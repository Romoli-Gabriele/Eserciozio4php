<!doctype html>
<html>

<head>
    <title>Tabellone scrutinio</title>
</head>
<h1>TABELLONE SCRUTINIO</h1>
<br>
<?php
session_start();
echo $_SESSION["risultati"];
session_destroy();
?>

<body>