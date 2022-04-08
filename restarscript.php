<html>
<body>
<?php
require_once('db.php');



$sql = "UPDATE paraules SET valor = valor - 1 WHERE paraula = 'professional'";


  

  if ($conn->query($sql) === TRUE) {
    echo "Success!";
    echo "<script>window.close();</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;


  }
  
?>


</script>
</body>
</html>
