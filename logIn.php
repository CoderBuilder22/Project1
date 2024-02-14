<?php
mysql_connect("localhost","root","") or die("serveur not found 404");
mysql_select_db("e-commercedatabase") or die("data base not found");
$mail=$_POST['umail'];
$password=$_POST['upassword'];
$req="SELECT * from client where mail='$mail' and password ='$password'";
$res=mysql_query($req);
if (mysql_num_rows($res)==1) {
	echo "acceder au main page";
}
else{
	echo "account not found you should sign in";
}
mysql_close();
?>