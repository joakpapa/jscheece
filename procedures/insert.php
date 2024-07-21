<?php
  $conn = mysqli_connect('xxxxxxx','xxxxxxx','xxxxxxx');
  mysqli_select_db($conn,'xxxxxxx');

  mysqli_query($conn,'insert into adminorder (Πελάτης,Κωδικός_Προϊόντος,Ποσότητα) values ("'.$_POST['Πελάτης1'].'","'.$_POST['Κωδικός_Προϊόντος1'].'","'.$_POST['Ποσότητα1'].'" )');
  $inserted_id = mysqli_insert_id($conn);
  
  $y=mysqli_query($conn,'select Παραγγελία,Πελάτης,Κωδικός_Προϊόντος,Ποσότητα from adminorder where Παραγγελία="'.$inserted_id.'"');
  $x=mysqli_fetch_array($y);

  echo json_encode($x);
  
  mysqli_close();
?>
