<?php
  $conn = mysqli_connect('xxxxxxx','xxxxxx','xxxxxxxx');
  mysqli_select_db($conn,'xxxxxx');

  mysqli_query($conn,'delete from adminorder where Παραγγελία="'.$_POST['id2delete'].'"');  

  mysqli_close();
?>
