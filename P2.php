<?php
echo '<p>Listado de Numeros</p>';
$var1 = $_GET['can'];
for($numero=1;$numero<=$var1;$numero++){
echo $numero."<br>";
}
?>

