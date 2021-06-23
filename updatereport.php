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
$Name = mysqli_real_escape_string($dbc, $_GET['Name']);
$Sex = mysqli_real_escape_string($dbc, $_GET['Sex']);
$Country = mysqli_real_escape_string($dbc, $_GET['Country']);
$Age = mysqli_real_escape_string($dbc, $_GET['Age']);
$AbuseType = mysqli_real_escape_string($dbc, $_GET['AbuseType']);
$PerpetratorSex = mysqli_real_escape_string($dbc, $_GET['PerpetratorSex']);
$PerpetratorName = mysqli_real_escape_string($dbc, $_GET['PerpetratorName']);
$PerpetratorAge = mysqli_real_escape_string($dbc, $_GET['PerpetratorAge']);
$ReportId = mysqli_real_escape_string($dbc, $_GET['ReportId']);
$Date = mysqli_real_escape_string($dbc, $_GET['Date']);

$query = "UPDTE Report SET name='Name', sex='$Sex', country='$Country', age='$Age', abuse_type='$AbuseType', perpetrator's_sex='$PerpetratorSex', perpetrator's_name='$PerpetratorName', perpetrator's_age='$PerpetratorAge', date='$Date' WHERE id='$ReportId'";
$result = mysqli_query($dbc, "$query")or trigger_error("Query MySQL Error: " . mysqli_error($dbc));

mysqli_close($dbc);

?>
