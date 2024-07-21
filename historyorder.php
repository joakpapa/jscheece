<?php 
session_start();

if (!isset($_SESSION["user_admin"])) {

    header("Location: orderscunstomer.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>JSCheese - Το Τυροκομείο της Καβάλας</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-7">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" type="text/css" rel="stylesheet"/>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<!--Αρχή header-->
    <div class="container-fluid">
        <h1>
            <a class="navbar-brand" href="index.php">
                <img src="jscheeselogo.png" width="80" height="80" class="d-inline-block align-top" alt="">
            </a>
            JSCheese - Το Τυροκομείο της Καβάλας
        </h1>

<!--Αρχή nav-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Η Εταιρεία</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">Προϊόντα</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Υπηρεσίες
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="orderscunstomer.php">Διαχειριστής</a></li>
                                <li><a class="dropdown-item" href="geusignosiacalender.html">Εκδηλώσεις</a></li>
                                <li><a class="dropdown-item" href="pelates.html">Οι Πελάτες μας</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login-page.php">Λογαριασμός</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="epikinonia.html">Επικοινωνία</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
      <!--Τέλος nav-->
      <!--Τέλος header-->

      <!-- Ο Λογαριασμός του Διαχειριστή -->
      <h3 class="d-flex justify-content-center pt-5">
    <?php echo "Καλώς ήρθατε " . $_SESSION['user_admin'];?>
    </h3> 

    <!--Αρχή εικόνας για αποσύνδεση-->
<a id="logoutLink" class="d-flex justify-content-center" href="procedures/logout_admin.php"> </a>
    <br>

    <script>
        var logoutLink = document.getElementById('logoutLink');

        var logoutIcon = document.createElement('img');
        logoutIcon.src = 'img/logout.png'; 

        logoutLink.appendChild(logoutIcon);

        logoutLink.addEventListener('mouseover', function() {
                this.style.cursor = 'pointer';
                this.style.transform = 'scale(1.1)';
                this.style.filter = 'brightness(1.2)';
            });
            logoutLink.addEventListener('mouseout', function() {
                this.style.transform = 'scale(1)';
                this.style.filter = 'brightness(1)';
            });
    </script>
    <!--Τέλος εικόνας για αποσύνδεση-->

    <!--Αρχή AJAX-->

    <script language="javascript" type="text/javascript">
function ajaxFunctionEdit() {
 var ajaxRequest;
 try{ ajaxRequest = new XMLHttpRequest(); } catch (e) {
  try{ ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
   try{ ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {
    alert("Your browser broke!"); return false;
   }
  }
 }
 ajaxRequest.onreadystatechange = function() {
  if ( ajaxRequest.readyState==4 ) {
	var myResponse = JSON.parse(ajaxRequest.responseText);
	var trows = document.getElementById("my_table").rows;
	for (var i = 0; i < trows.length; i++){
		if (trows[i].id==myResponse['Παραγγελία']) {
			trows[i].cells.namedItem('Πελάτης').innerHTML=myResponse['Πελάτης'];
			trows[i].cells.namedItem('Κωδικός_Προϊόντος').innerHTML=myResponse['Κωδικός_Προϊόντος'];
      trows[i].cells.namedItem('Ποσότητα').innerHTML=myResponse['Ποσότητα'];
			break;
		}
	}
  }
 }
 var radios = document.getElementsByName('client_selection');
    for (var i = 0; i < radios.length; i++){
		if (radios[i].checked) {
			var client_selection = radios[i].value;
			break;
		}
    }
 ajaxRequest.open("POST", "procedures/edit.php", true);
 var queryString = 'Πελάτης1='+document.getElementById('Πελάτης1').value+'&Κωδικός_Προϊόντος1='+document.getElementById('Κωδικός_Προϊόντος1').value+'&Ποσότητα1='+document.getElementById('Ποσότητα1').value+'&client_selection='+client_selection;
 ajaxRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 ajaxRequest.send(queryString);
    document.getElementById("Πελάτης1").value = "";
    document.getElementById("Κωδικός_Προϊόντος1").value = "";
    document.getElementById("Ποσότητα1").value = "";
}

function ajaxFunctionInsert() {
 var ajaxRequest;
 try{ ajaxRequest = new XMLHttpRequest(); } catch (e) {
  try{ ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
   try{ ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {
    alert("Your browser broke!"); return false;
   }
  }
 }
 ajaxRequest.onreadystatechange = function() {
  if ( ajaxRequest.readyState==4 ) {
	var myResponse = JSON.parse(ajaxRequest.responseText);
	var myTable = document.getElementById("my_table");
	var newRow = myTable.insertRow();
	newRow.id = myResponse['Παραγγελία'];
	var newCell1 = newRow.insertCell(0);
	var newCell2 = newRow.insertCell(1);
	var newCell3 = newRow.insertCell(2);
	newCell3.id = 'Πελάτης';
	var newCell4 = newRow.insertCell(3);
	newCell4.id = 'Κωδικός_Προϊόντος';
  var newCell5 = newRow.insertCell(4);
	newCell5.id = 'Ποσότητα';
	var newCell6 = newRow.insertCell(5);
	newCell1.innerHTML='<input type="radio" name="client_selection" value="'+myResponse['Παραγγελία']+'">';
	newCell2.innerHTML=myResponse['Παραγγελία'];
	newCell3.innerHTML=myResponse['Πελάτης'];
	newCell4.innerHTML=myResponse['Κωδικός_Προϊόντος'];
  newCell5.innerHTML=myResponse['Ποσότητα'];
	newCell6.innerHTML='<img id="'+myResponse['Παραγγελία']+'" src="img/delete.png" width="30" height="30" onmouseup="ajaxFunctionDelete(this.id)" onmouseover="this.style.cursor=\'pointer\';">';
    document.getElementById("Πελάτης1").value = "";
    document.getElementById("Κωδικός_Προϊόντος1").value = "";
    document.getElementById("Ποσότητα1").value = "";
  }
 }
 ajaxRequest.open("POST", "procedures/insert.php", true);
 var queryString = 'Πελάτης1='+document.getElementById('Πελάτης1').value+'&Κωδικός_Προϊόντος1='+document.getElementById('Κωδικός_Προϊόντος1').value+'&Ποσότητα1='+document.getElementById('Ποσότητα1').value;
 ajaxRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 ajaxRequest.send(queryString);
}

function ajaxFunctionDelete(myId) {
 var ajaxRequest;
 try{ ajaxRequest = new XMLHttpRequest(); } catch (e) {
  try{ ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
   try{ ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {
    alert("Your browser broke!"); return false;
   }
  }
 }
 ajaxRequest.onreadystatechange = function() {
  if ( ajaxRequest.readyState==4 ) {
	var trows = document.getElementById("my_table").rows;
	for (var i = 0; i < trows.length; i++){
		if (trows[i].id==myId) {
			trows[i].parentNode.removeChild(trows[i]);
			break;
		}
	}
  }
 }
 ajaxRequest.open("POST", "procedures/delete.php", true);
 var queryString = 'id2delete='+myId;
 ajaxRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 ajaxRequest.send(queryString);
}
</script>

<!--CSS για κεντρική στοίχιση form-->
<style>
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center; 
          }
        
          table {
            border-collapse: collapse;
            width: 100%; 
            max-width: 800px;
        }

        td {
          padding: 10px;
          border: 1px solid #ccc; 
        }

        td input[type="text"] {
            width: 100%; 
            box-sizing: border-box; 
        }
    </style>
    <!-- Τέλος CSS για κεντρική στοίχιση form-->

<div class="centered-form">
<input type="hidden" name="btn">
<table id="my_table">
  <tr>
    <td width="20" bgcolor="#DE9C16">&nbsp;</td>
    <td width="40" bgcolor="#DE9C16">Παραγγελία</td>
    <td width="165" bgcolor="#DE9C16">Πελάτης</td>
    <td width="200" bgcolor="#DE9C16">Κωδικός_Προϊόντος</td>
    <td width="200" bgcolor="#DE9C16">Ποσότητα</td>
    <td width="15" bgcolor="#DE9C16">&nbsp;</td>
  <?php
  $conn = mysqli_connect('localhost','nisonis','CaPYwq2p');
  mysqli_select_db($conn,'nisonis');
  $y=mysqli_query($conn,"select * from adminorder");
  while ($x=mysqli_fetch_array($y)) {
  ?>
    <tr id="<?php echo $x['Παραγγελία']; ?>">
      <td><input type="radio" name="client_selection" value="<?php echo $x['Παραγγελία']; ?>"></td>
      <td><?php echo $x['Παραγγελία']; ?></td>
      <td id="Πελάτης"><?php echo $x['Πελάτης']; ?></td>
      <td id="Κωδικός_Προϊόντος"><?php echo $x['Κωδικός_Προϊόντος']; ?></td>
      <td id="Ποσότητα"><?php echo $x['Ποσότητα']; ?></td>
      <td><img id="<?php echo $x['Παραγγελία']; ?>" src="img/delete.png" width="30" height="30" onmouseup="ajaxFunctionDelete(this.id)" onmouseover="this.style.cursor='pointer'"></td>
    </tr>
  <?php
  }
  ?>
</table>
</div>

<div class="centered-form">
<table>
  <tr>
    <td width="20">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="165"><input type="text" id="Πελάτης1" style="background:#e0e0ff"></td>
    <td width="200"><input type="text" id="Κωδικός_Προϊόντος1" style="background:#e0e0ff"></td>
    <td width="200"><input type="text" id="Ποσότητα1" style="background:#e0e0ff"></td>
    <td width="15">&nbsp;</td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><img src="img/edit.png" width="60" height="60" onmouseup="ajaxFunctionEdit();" onmouseover="this.style.cursor='pointer'"></td>
    <td colspan="2"><img src="img/ins.png" width="60" height="60" onmouseup="ajaxFunctionInsert();" onmouseover="this.style.cursor='pointer'"></td>
    <td >&nbsp;</td>
  </tr>
</table>
</div>

    <!--Τέλος AJAX-->
      </body>
      </html>
      <pre>




      </pre>
    <!--Αρχή footer-->
<footer class="bg-dark text-white" margin-top: 20px;>    
    <div class="container-fluid text-center text-md-left pt-5 pb-4 mx-auto">
      <div class="row text-center text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3"> 
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">JSCheese</h5>
          <p>Το Τυροκομείο στην Καβάλα που φέρνει τη γεύση στη ζωή σας.</p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Προϊόντα</h5>
          <p><a href="products.html">Φρέσκα Τυροκομικά</a></p>
          <p><a href="pelates.html">Οι Πελάτες μας</a></p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Υπηρεσίες</h5>
          <p><a href="geusignosiacalender.html">Εκδηλώσεις</a></p>
          <p><a href="login-page.php">Λογαριασμός</a></p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Επικοινωνία</h5>
          <div class="contSR">Διεύθυνση: Σάμου 7, 65201 Καβάλα</div>
          <div class="contSR"><span>E-mail:</span> <a href="mailto:info@jscheese.gr">info@jscheese.gr</a></div>
          <div class="contSR"><span>Τηλ.:</span> <a href="tel:+302510123456">+30 2510 123456</a></div>
        </div>
      </div>
      <hr class="mb-4">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8">
          <p>© Copyright 2024 JSCheese | Web Design &amp; Development by joakpap & nisonis</p>
        </div>
        <div class="col-md-5 col-lg-4">
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;">
                <i class="fab fa-facebook"></i>
            </a>            
</div>
</div>
<div class="col-md-5 col-lg-4">
<div class="text-center text-md-right">
<ul class="list-unstyled list-inline">
<li class="list-inline-item">
<a href="https://www.facebook.com/" class="btn-floating btn-sm text-white" style="font-size:23px;">
<i class="fab fa-facebook"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-facebook"  type="button" aria-current="page" viewBox="0 0 16 16">
<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
</a>
</li>
<li class="list-inline-item">
<a href="https://www.youtube.com/" class="btn-floating btn-sm text-white" style="font-size:23px;">
<i class="fab fa-youtube"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
<path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
</a>
</li>
<li class="list-inline-item">
<a href="https://www.instagram.com/" class="btn-floating btn-sm text-white" style="font-size:23px;">
<i class="fab fa-instagram"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
</a>
</li>			  	 			  				  					  	 
</ul>
</div>
</div>
</div>
</div>
</div>
</footer>
<!--Τέλος footer-->
</body>
</html>