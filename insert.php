<html>
<body>

<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "transport";

$a = $_GET["id_no"];
$b = $_GET["licence"];
$c = $_GET["plateno"];
$d = $_GET["fname"];
$e = $_GET["lastname"];
$f = $_GET["age"];
$g = $_GET["gender"];
$h = $_GET["address"];
$i = $_GET["contact"];
$j = $_GET["email"];
$k = $_GET["bdate"];
$l = $_GET["nationality"];
$m = $_GET["edulevel"];
$n = $_GET["vehicletype"];
$o = $_GET["yrhired"];
$p = $_GET["empname"];
$q = $_GET["empadd"];

$db = new mysqli($hostname,$username,$password,$database) or die($mysqli->error);

$sql="INSERT INTO `driver_employee` (id_no, licence, plateno, fname, lastname, age, gender, address, contact, email, bdate, nationality, edulevel, vehicletype, yrhired, empname, empadd) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$q."')";

if($db->query($sql)){
    echo "Driver Registered";
}else{
    echo "recording failed<br>";
    die($db->error);
}
?>
<div style="margin: auto;"><a class="link" href="view.php">View List</a></div>
<div style="margin: auto;"><a class="link" href="index.php">Return</a></div>
</body>
</html>