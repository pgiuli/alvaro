<!DOCTYPE html>
<html>

<body>
<h1>Comptador de Professionals</h1>
<h2>Fet per: </h2> <a class="btn btn-success" href="https://spork.pallers.cat" target="_blank"><h2>Pau Giuli</h2></a>
<h3>Inspirat per: Ramon Ronquillo</h3>

<?php
require_once('db.php');

echo("<meta http-equiv='refresh' content='1'> ");

$valorparaula = "SELECT valor FROM paraules";
$result = $conn->query($valorparaula);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "L'Àlvaro ha dit que és un professional " . $row["valor"]. " vegades.<br>";
    }
} else {
    echo "Error, contacta amb l'administrador.";
}


?>

<br>

<a class="btn btn-success" href="https://spork.pallers.cat" target="_blank">Portfolio</a>



</body>
</html>