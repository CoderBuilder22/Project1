<?php
mysql_connect("localhost","root","") or die("erreur serveur");
mysql_select_db("e-commercedatabase") or die("date base not found");
$fn=$_POST['uname'];
$ln=$_POST['LName'];
$mail=$_POST['umail'];
$password=$_POST['upassword'];
$tel=$_POST['utel'];
$sexe=$_POST['sexe'];
$req="INSERT INTO client values('$fn','$ln','$mail','$password','$tel','$sexe')";
$res = mysql_query($req);
if (mysql_affected_rows()==1) {
	echo "le client est ajouté acceder au main page";
}
mysql_close();

?>
