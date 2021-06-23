<?php

DEFINE ('DBUSER', 'sphirgdx_repoguser');
DEFINE ('DBPW', '7##h%),~q-W@');
DEFINE ('DBHOST', 'localhost');
DEFINE ('DBNAME', 'sphirgdx_repogv');

$dbc = mysqli_connect(DBHOST, DBUSER, DBPW);
if (!$dbc) {
die("Database connection failed: ". mysqli_error($dbc));
exit();
}
$dbs = mysqli_select_db($dbc, DBNAME);
if(!$dbs){
die("Database connection failed: ". mysqli_error($dbc));
exit();
}
$result = mysqli_query($dbc, "SHOW COLUMN FROM Report");
$numberOfRows = mysqli_num_rows($result);
if ($numberOfRows > 0){
$values = mysqli_query($dbc, "SELECT * FROM Report");
while($rowr = mysqli_fetch_row($values)){
for ($j=0;j<$numberOfRows;$j++){
$csv_output .= $rowr[$j].", ";
}
$csv_output .= "\n";
}
}

print $csv_output
exit;

?>