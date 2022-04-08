<!DOCTYPE html>
<html>

<body>
<h1>Comptador de Professionals</h1>
<h2>Fet per: Pau Giuli</h2>
<br>
<br>

<?php
require_once('db.php');


$sql = "SELECT valor FROM paraules";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "valor: " . $row["valor"]. "<br>";
    }
} else {
    echo "0 results";
}


?>



<a class="btn btn-success" href="https://alvaro.giuli.cat/afegirscript.php" target="_blank">Afegir</a>
<a class="btn btn-success" href="https://alvaro.giuli.cat/restarscript.php" target="_blank">Treure</a>
<a class="btn btn-success" href="https://alvaro.giuli.cat/canviar.php">Refrescar</a>




</body>
</html>