<?php 
//Σύνδεση χρήστη.
session_start();
include "../procedures/db_connect.php";
        
$username = $_POST["user_admin"];
$password = $_POST["pass_admin"];
$query = mysqli_query($con, "SELECT * FROM admin WHERE Username = '$username'");
$num_of_rows = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);

if ( $num_of_rows == 1 && $row['Password'] == $password ) {
    
    //Ανάκτηση των στοιχείων του χρήστη που έχει συνδεθεί.
    $_SESSION['user_admin'] = $username;
    $_SESSION['pass_admin'] = $row['Password'];
    ?>
	<script> 
        document.location = '../historyorder.php';
    </script>
    <?php
}
else {
    session_unset();
    ?>
	<script> 
		alert('Δεν βρέθηκε χρήστης με αυτά τα στοιχεία.');
        document.location = '../orderscunstomer.php';
    </script>
    <?php
}            
mysqli_close($con);
?>
