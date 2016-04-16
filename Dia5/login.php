<?php

echo 'usuario '.$_POST['Username'].'<br/>';
echo 'pssword '.$_POST['Password'];

<?php
$con = mysql_connect("server.com","user","pswd");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("db", $con);

$result = mysql_query("select count(1) FROM table");
$row = mysql_fetch_array($result);

$total = $row[0];
echo "Total rows: " . $total;

mysql_close($con);
?>





?>