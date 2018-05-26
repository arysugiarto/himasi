<?php 

session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
		<?php
		if(isset($_POST['login'])){ //mengecek value button jika benar value nya login maka lakukan proses di bawah
			require_once "../pages/lib/koneksi.php";
			$link = connect(); //memangil nama function yg di file koneksi.php
			$username	= $_POST['username']; //mengirimkan data name dari form username
			$password	= $_POST['password']; //mengirimkan data name dari  form password
			$level		= $_POST['pilih'];

			$query = mysqli_query($link, "SELECT * FROM tb_admin WHERE Username='$username' AND  Password='$password'"); //menampilkan / mengambil data user dan pasword yang ada di database untuk di bandingkan
			if(mysqli_num_rows($query) == 0){ //jika password dan username tidak sama/kosong
				echo '<div class="alert alert-danger">Maaf...!!! Username dan password SALAH</div>'; //akan menampilkan username dan password tidak sama dengan yang di databse
			}else{ //jika username dan password benar
				$row = mysqli_fetch_assoc($query); //mengambil data dari variable $query
		    $_SESSION['level']=$row['level'];
				if($row['level'] == 1 && $level == 1){ //membandingkan level yg di value form dengan level yang ada di database
					$_SESSION['username']=$username; //membandigkan user yg di database dengan yg di input di form
			   $_SESSION['level']=1; //jika level yang di pilih 1
					header("Location: ../index.php"); //menampilkan file beranda.php bagian admin
				}else if($row['level'] == 2 && $level == 2){//membandingkan level yg di value form dengan level yang ada di database
					$_SESSION['username']=$username;//membandigkan user yg di database dengan yg di input di form
				$_SESSION['level']=2;//jika level yang di pilih 2
					header("Location: ../index.php"); //menampilkan file beranda.php bagian keuangan
				}else{
					echo '<div class="alert alert-danger">Maaf...!!! Login gagal username dan pasword tidak sesuai dengan hak akses yang di pilih</div>'; ///menampilkan pesan kesalahan jika level yang di pilih kan tidak sama denga username dan password yag di inputkan
				}
			}
		}
		?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="index.php">
					<span class="login100-form-title p-b-51">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
                         </div>
                         <div>
                              <center>                        
                              <input type="radio" name="pilih" value="1">Super Admin
						<input type="radio" name="pilih" value="2">Administrator
                              </center>
                         </div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" name="login" class="login100-form-btn" > 
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>