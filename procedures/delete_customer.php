<?php

session_start();
include "../procedures/db_connect.php";

$customer_id = $_SESSION['customer_id'];
$query = mysqli_query($con,"DELETE FROM customers WHERE customer_id = $customer_id"); 
?>
<script> 
    alert('Ο λογαριασμός σας διαγράφηκε επιτυχώς.');
    document.location = '../login-page.php';
</script>
<?php
session_unset();
mysqli_close($con);
?>

