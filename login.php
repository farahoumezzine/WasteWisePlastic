
<?php
   session_start();
   require './Database.php';

$db = new Database();
$conn = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['userName']) && isset($_POST['password']) && !empty($_POST['userName']) && !empty($_POST['password'])) {
		// Échapper les valeurs pour éviter les attaques par injection SQL (utilisez des requêtes préparées pour une sécurité accrue)
		$userName = mysqli_real_escape_string($conn, $_POST['userName']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		// Requête SQL pour vérifier les informations de connexion
		$sql = "SELECT * FROM users WHERE userName = '$userName' AND password = '$password'";
		
		// Exécutez la requête SQL
		$result = mysqli_query($conn, $sql);

		// Vérifiez s'il y a des résultats
		if ($result && mysqli_num_rows($result) > 0) {
			// Utilisateur authentifié avec succès
			$_SESSION['user'] = $userName; // Enregistrez l'utilisateur dans la session
			echo ("work"); // Redirigez vers une page de bienvenue ou un tableau de bord
			exit();
		} else {
			// Échec de l'authentification
			echo "Invalid username or password";
		}
	} else {
		// Les champs ne sont pas définis ou vides
		echo "Please enter both username and password";
	}
}
$db->closeConnection(); 
 
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../WasteWisePlastic/assets/css/styles2.css">

	</head>
	<body >
		
		<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Form</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="register-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>

				 
		      	<!--<h3 class="text-center mb-4">Have an account?</h3>-->
						<form method="POST" action="login.php"  class="login-form" onsubmit="return Checkformulaire()">
		      		
                      <div class="form-group">
                        <input type="text"  name="userName" id="usernameID" class="form-control rounded-left" 
						placeholder="User Name"   required oninput="checklengthpass2()">
						<h6 style="color: #CE5A67;" id="passwordloc2" class="invalid"></h6>

                    </div>
                    
                    
                    
                    

				
                   
	            <div class="form-group d-flex">
	              <input type="password" name="password" id="pass1" class="form-control rounded-left" placeholder="Password" required oninput="checklengthpass()"
				  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
				  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
				
	            </div>
                <div class="form-group d-flex">
                    <input type="password" id="pass2" class="form-control rounded-left" placeholder="Confirm Password" required>
                  </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	
								</div>
								<div class="w-50 text-md-right">
									<a href="register.html">Have an account ?REGISTER</a>
								</div>
								
	            </div>
				<div id="message">
					<h3>Password must be contain:</h3>
					<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
					<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
					<p id="number" class="invalid">A <b>number</b></p>
					<p id="length" class="invalid">Minimum <b>8 characters</b></p>
				  </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">
						Get Started</button>
						
	            </div>
				


	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
    <script src="assets/js/javascript2.js"></script>

	<script src="assets/js/jquery-2.2.3.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!--<script src="./assets/js/popper.js"></script>-->

  
  <script>
	var password1 = document.getElementById("pass1");

//  show the message box
password1.onfocus = function () {
  document.getElementById("message").style.display = "block";
};

// hide the message box
password1.onblur = function () {
  document.getElementById("message").style.display = "none";
};


  </script>
  </div >
	</body>
</html>

 