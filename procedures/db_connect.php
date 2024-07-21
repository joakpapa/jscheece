<?php 
//Μεταβλητές για την σύνδεση με την βάση δεδομένων.
$server_name = "xxxxxxxx";
$username = "xxxxxxx";
$password = "xxxxxxx";
$my_db = "xxxxxxx";
            
//Χρήση της μεταβλήτης $con για ευκολότερη διαχείριση της σύνδεσης.
$con = mysqli_connect($server_name, $username, $password, $my_db);
            
//Επιλογή της βάσης δεδομένων.
//mysqli_select_db($con, $my_db);
/*if (mysqli_select_db($con, $my_db)) {
    echo "connected to the database: " . $my_db; 
}
else {
    die (mysqli.error());
}*/

//Για την σωστή απεικόνιση των ελληνικών χαρακτήρων.
mysqli_query($con,"SET NAMES 'utf8'");           
?>

