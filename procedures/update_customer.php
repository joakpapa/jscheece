<?php

session_start();
include "../procedures/db_connect.php";

$customer_id = $_SESSION['customer_id'];
$customer_fname = $_POST["customer_fname"];
$customer_lname = $_POST["customer_lname"];
$customer_company = $_POST["customer_company"];
$customer_email = $_POST["customer_email"];
$customer_phone = $_POST["customer_phone"];
$customer_address = $_POST["customer_address"];
$customer_password = $_POST["customer_password"];

$query = mysqli_query($con,
    "UPDATE customers
    SET customer_fname = '$customer_fname', 
        customer_lname = '$customer_lname',
        customer_company = '$customer_company',
        customer_email = '$customer_email', 
        customer_phone = '$customer_phone', 
        customer_address = '$customer_address',
        customer_password = '$customer_password'
    WHERE customer_id = $customer_id"
);                            

//$_SESSION['customer_id'] = $customer_fname;
$_SESSION['customer_fname'] = $customer_fname;
$_SESSION['customer_lname'] = $customer_lname;
$_SESSION['customer_company'] = $customer_company;
$_SESSION['customer_email'] = $customer_email;
$_SESSION['customer_phone'] = $customer_phone;
$_SESSION['customer_address'] = $customer_address;
$_SESSION['customer_password'] = $customer_password;
?>
<script> 
    alert('Τα στοιχεία σας αποθηκεύτηκαν επιτυχώς.');
    document.location = '../customerAccount-page.php';
</script>
<?php
mysqli_close($con);
?>

