<?php

session_start();
include "../procedures/db_connect.php";

$fname = $_POST["reg_fname"];
$lname = $_POST["reg_lname"];
$email = $_POST["reg_email"];
$phone = $_POST["reg_phone"];
$company = $_POST["reg_company"];
$address = $_POST["reg_address"];
$password = $_POST["reg_password"];

$query = mysqli_query($con,"SELECT * FROM customers WHERE customer_email = '$email'");
$num_of_rows = mysqli_num_rows($query);
//echo var_dump($num_of_rows);

if ( $num_of_rows == 0 ) {

	mysqli_query($con, "INSERT INTO customers 
                (customer_fname, customer_lname, customer_company, customer_email, customer_phone, customer_address, customer_password) 
                VALUES ('$fname', '$lname', '$company', '$email', '$phone', '$address', '$password')");
    
    //Ανάκτηση των στοιχείων του χρήστη που έχει κάνει εγγραφή.
    $sql = mysqli_query($con,"SELECT * FROM customers WHERE customer_email = '$email'");
    $row = mysqli_fetch_array($sql);
    $_SESSION['customer_id'] = $row['customer_id'];
    $_SESSION['customer_fname'] = $row['customer_fname'];
    $_SESSION['customer_lname'] = $row['customer_lname'];
    $_SESSION['customer_company'] = $row['customer_company'];
    $_SESSION['customer_email'] = $email;
    $_SESSION['customer_phone'] = $row['customer_phone'];
    $_SESSION['customer_address'] = $row['customer_address'];
    $_SESSION['customer_password'] = $password;
    ?>
    <script> 
    	alert('Η εγγραφή σας ολοκληρώθηκε επιτυχώς!');
    	document.location = '../customerAccount-page.php';
    </script>
    <?php
}
else { 
    session_unset();
    ?>
	<script> 
		alert('H Διεύθυνση email υπάρχει ήδη.');
        document.location = '../login-page.php';
    </script>
    <?php
} 

mysqli_close($con);
?>
