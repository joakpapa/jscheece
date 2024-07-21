<?php 
//Σύνδεση χρήστη.
session_start();
include "../procedures/db_connect.php";
        
$email = $_POST["log_email"];
$password = $_POST["log_pass"];
$query = mysqli_query($con, "SELECT * FROM customers WHERE customer_email = '$email'");
$num_of_rows = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);

if ( $num_of_rows == 1 && $row['customer_password'] == $password ) {
    
    //Ανάκτηση των στοιχείων του χρήστη που έχει συνδεθεί.
    $_SESSION['customer_email'] = $email;
	$_SESSION['customer_id'] = $row['customer_id'];
    $_SESSION['customer_fname'] = $row['customer_fname'];
    $_SESSION['customer_lname'] = $row['customer_lname'];
    $_SESSION['customer_company'] = $row['customer_company'];
    $_SESSION['customer_phone'] = $row['customer_phone'];
    $_SESSION['customer_address'] = $row['customer_address'];
    $_SESSION['customer_password'] = $row['customer_password'];
    ?>
	<script> 
        document.location = '../customerAccount-page.php';
    </script>
    <?php
}
else {
    session_unset();
    ?>
	<script> 
		alert('Δεν βρέθηκε χρήστης με αυτά τα στοιχεία.');
        document.location = '../login-page.php';
    </script>
    <?php
}            
mysqli_close($con);
?>
