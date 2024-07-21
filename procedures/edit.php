<?php
  $conn = mysqli_connect('xxxxxxx','xxxxxxx','xxxxxxx');
  mysqli_select_db($conn,'xxxxxxx');

  mysqli_query($conn,'update adminorder set Πελάτης="'.$_POST['Πελάτης1'].'" where Παραγγελία="'.$_POST['client_selection'].'"');
  mysqli_query($conn,'update adminorder set Κωδικός_Προϊόντος="'.$_POST['Κωδικός_Προϊόντος1'].'" where Παραγγελία="'.$_POST['client_selection'].'"');
  mysqli_query($conn,'update adminorder set Ποσότητα="'.$_POST['Ποσότητα1'].'" where Παραγγελία="'.$_POST['client_selection'].'"');

  $y=mysqli_query($conn,'select Παραγγελία,Πελάτης,Κωδικός_Προϊόντος,Ποσότητα from adminorder where Παραγγελία="'.$_POST['client_selection'].'"');
  $x=mysqli_fetch_array($y);

  echo json_encode($x);
  
  mysqli_close();
?>
