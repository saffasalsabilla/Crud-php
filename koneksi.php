<?php
try
{
    $conn = new PDO("mysql:host=localhost;dbname=databarang","root","");
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
