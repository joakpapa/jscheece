<!DOCTYPE html>
<html lang="en">
<head>
    <title>JSCheese - Το Τυροκομείο της Καβάλας</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" type="text/css" rel="stylesheet"/>    
</head>
<body>
  <!--Αρχή header-->
    <div class="container-fluid">
        <h1>
            <a class="navbar-brand" href="index.php">
                <img src="jscheeselogo.png" width="80" height="80" class="d-inline-block align-top" alt="JSCheese Logo">
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
                            <a class="nav-link active" aria-current="page" href="index.php">Η Εταιρεία</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">Προϊόντα</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
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
            </form>
                    </form>
                </div>
            </div>
        </nav>
        <!--Τέλος nav-->
         <!--Τέλος header-->

        <br>
        <!--Σύνδεση Διαχειριστή-->
<div class="container-fluid pb-5">
<div class="row justify-content-center">
		<div class="col-md-5">
			<h4 class="mt-5 mb-3">Σύνδεση Διαχειριστή</h4>
			<hr>
			<form id="loginForm" action="procedures/adminlogin.php" method="post">
        <label for="user_admin">Username</label>
        <input type="text" class="form-control" name="user_admin" id="user_admin" required>
        
        <label for="pass_admin">Password</label>
        <input type="password" class="form-control" name="pass_admin" id="pass_admin" required>
        <br>
        <button class="btn btn-outline-dark" type="button" id="submitBtn">Σύνδεση</button>
        <pre>

        </pre>
    </form>

    <script>
        document.getElementById('submitBtn').addEventListener('click', function() {
            document.getElementById('loginForm').submit();
        });

            document.getElementById('submitBtn').addEventListener('click', function() {
            document.getElementById('loginForm').submit();
        });

        document.getElementById('submitBtn').addEventListener('mouseover', function() {
            this.style.backgroundColor = 'blue';
            this.style.color = 'white';
        });

        document.getElementById('submitBtn').addEventListener('mouseout', function() {
            this.style.backgroundColor = 'green';
            this.style.color = 'white';
        });
    </script>
		</div>
    <br>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./img/img1.png" class="d-block w-100" alt="First slide">
                <div class="carousel-caption">
                  <h2>Καλώς ήλθατε στην JSCheese!</h2>
                  <h3>Ανακαλύψτε τη μοναδική γεύση των τυροκομικών μας προϊόντων.</h3>
                <pre></pre>
                  <h4>Κάνε τώρα εγγραφή και εξασφάλισε 20% έκπτωση στην πρώτη σου παραγγελία! </h4>
                  <p> Μην χάσεις την ευκαιρία για οικονομία σε κάθε αγορά στο μαγαζί σου.</p>
                  <pre>







                  </pre>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/img2.png" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption">
                  <h2>Φρέσκα υλικά, παραδοσιακές συνταγές</h2>
                  <p>Χρησιμοποιούμε μόνο τα πιο ποιοτικά υλικά για να σας προσφέρουμε την απόλυτη γευστική εμπειρία.</p>
                  <pre>







                  </pre>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/img3.png" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption">
                  <h2>Γίνετε μέλος της JSCheese οικογένειας</h2>
                  <p>Ενημερωθείτε για ειδικές προσφορές και νέα προϊόντα. Καλώς ήλθατε στη γαστρονομική μας κοινότητα!</p>
                  <pre>







                  </pre>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          </div>
          <br>

    <!--- Σύνδεση Πελατών. --->
<div class="container-fluid pb-5">
	<div class="row px-5">
		<div class="col-md-5">
			<h4 class="mt-5 mb-3">Σύνδεση Πελατών</h4>
			<hr>
			<form id="loginForm" action="procedures/login.php" method="post">
        <label for="log_email">Email</label>
        <input type="text" class="form-control" name="log_email" id="log_email" required>
        
        <label for="log_pass">Password</label>
        <input type="password" class="form-control" name="log_pass" id="log_pass" required>
        <br>
        <button class="btn btn-outline-dark" type="button" id="submitBtn2">Σύνδεση</button>
    </form>

    <script>
        document.getElementById('submitBtn2').addEventListener('click', function() {
            document.getElementById('loginForm').submit();
        });

            document.getElementById('submitBtn2').addEventListener('click', function() {
            document.getElementById('loginForm').submit();
        });

        document.getElementById('submitBtn2').addEventListener('mouseover', function() {
            this.style.backgroundColor = 'blue';
            this.style.color = 'white';
        });

        document.getElementById('submitBtn2').addEventListener('mouseout', function() {
            this.style.backgroundColor = 'green';
            this.style.color = 'white';
        });
    </script>
		</div>
   <!--Δημιουργία Λογαριασμού Πελατών-->
   <div class="col-md-7 mb-5">
			<h4 class="mt-5 mb-3">Δημιουργία λογαριασμού Πελάτη</h4>
			<hr>
      <form id="insertform" action="procedures/sign_up.php" method="post">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fname">Όνομα</label>
                <input type="text" class="form-control" name="reg_fname" id="fname" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lname">Επώνυμο</label>
                <input type="text" class="form-control" name="reg_lname" id="lname" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="reg_email" id="email" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone">Αριθμός Τηλεφώνου</label>
                <input type="text" class="form-control" name="reg_phone" id="phone" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="company">Εταιρία</label>
                <input type="text" class="form-control" name="reg_company" id="company" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="address">Διεύθυνση</label>
                <input type="text" class="form-control" name="reg_address" id="address" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="password">Κωδικός</label>
                <input type="password" class="form-control" name="reg_password" id="password" required>
            </div>			
        </div>								
        <div class="row">
            <div class="col-md-6 mb-3">
                <button class="btn btn-outline-dark" type="button" id="signUpBtn">Εγγραφή</button>
            </div>
        </div>				
    </form>

    <script>
        document.getElementById('signUpBtn').addEventListener('click', function() {
          document.getElementById('insertform').submit();
        });

        // Προσθήκη εφέ hover στο κουμπί με JavaScript
        document.getElementById('signUpBtn').addEventListener('mouseover', function() {
            this.style.backgroundColor = 'blue';
            this.style.color = 'white';
        });

        document.getElementById('signUpBtn').addEventListener('mouseout', function() {
            this.style.backgroundColor = 'green';
            this.style.color = 'white';
        });
    </script>
		</div>
  </div>
</div>
</body>
          <!--Αρχή footer-->
          <footer class="bg-dark text-white">    
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