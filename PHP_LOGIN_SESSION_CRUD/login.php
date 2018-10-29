<?php 
include "connection.php";

	
	if($_POST){

		$user=$_POST["user"];
		$pass=$_POST["pass"];
		session_start();
		session_destroy();
		if(empty($user)||empty($pass)){
			echo "<script>alert('Eksik Bilgi');</script>";
		}else{
			session_start();
			$sql_login="Select * from login where username='".$user."' and password='".$pass."'";
			$result=$conn->query($sql_login);
			if(mysqli_num_rows($result)>0){
				$uArray=mysqli_fetch_array($result);
				$_SESSION["login"]=true;
            	$_SESSION["rol"] = $uArray["role"];
            	$_SESSION["id"] = $uArray["id"];
				header("location:index.php");

			}else
			echo "<script>alert('Kayıt yok');</script>";
		}
	}

?>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<form class="form-horizontal" action="" method="POST">

	<div class="form-group ">
		<div class="col-xs-2">
			<input class="form-control" type="text" required="" name="user" placeholder="Kullanıcı Adı">
		</div>
	</div>

	<div class="form-group">
		<div class="col-xs-2 ">
			<input class="form-control" type="password" required="" name="pass" placeholder="Şifre" id="myInput"><input type="checkbox" onclick="myFunction()"> Şifreyi Göster

			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
		</div>
	</div>

	<div class="form-group account-btn text-center m-t-10">
		<div class="col-xs-2">
			<button class="btn w-md btn-bordered btn-danger " type="submit">Giriş Yap</button>
		</div>
	</div>

</form>

