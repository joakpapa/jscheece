<html> 
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-7">
</head>
<body>
<?php 
$conn = mysqli_connect('localhost','nisonis','CaPYwq2p');
mysqli_select_db($conn,'nisonis');
mysqli_query($conn,'create table adminorder (Παραγγελία int not null auto_increment, Πελάτης varchar(100) not null,Κωδικός_Προϊόντος varchar(100),Ποσότητα varchar(100),primary key(Παραγγελία))');
mysqli_query($conn,'insert into adminorder (Πελάτης,Κωδικός_Προϊόντος,Ποσότητα) values ("ΑΒ Βασιλόπουλος","14563","10"),("Carrefour Μαρινόπουλος","34987","32"),("CiTY market","36289","120"),("Eλληνικά market","48721","234")');
$y=mysqli_query($conn,"show tables");
echo 'TABLES<br>';
echo '-----------<br>';
while ($x=mysqli_fetch_row($y))
{
  echo $x[0].'<br>';
}

echo '<br><br>TABLE adminorder<br>';
echo '------------------------<br>';
$y=mysqli_query($conn,"describe adminorder");
while ($x=mysqli_fetch_row($y))
{
  echo $x[0].' '.$x[1].' '.$x[2].' '.$x[3].' '.$x[4].'<br>';
}

echo '<br><br>TABLE adminorder RECORDS<br>';
echo '-----------------------------------<br>';
$y=mysqli_query($conn,"select * from adminorder");
while ($x=mysqli_fetch_array($y))
{
  echo $x['Παραγγελία'].' '.$x['Πελάτης'].' '.$x['Κωδικός_Προϊόντος'].' '.$x['Ποσότητα'].'<br>';
}
mysqli_close(); 
?>
</body>
</html>
