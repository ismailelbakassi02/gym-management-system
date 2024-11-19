<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
ob_start();
if(!isset($_SESSION['system'])){
	// $system = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
	// foreach($system as $k => $v){
	// 	$_SESSION['system'][$k] = $v;
	// }
}
ob_end_flush();
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AMANOU APP</title>
 	

<?php include('./header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		  width: 100%;
	    height: calc(100%);
	    background-image: url('https://hdqwalls.com/wallpapers/gym-girl.jpg');
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
	}
.container {
 position: absolute;
    top: 30%;
    left: 30%;
   
    width: 400px;
    height: 100px;
}

.btn{
	padding: 10pX;
	background-color: #6c1130;

}
.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>

<body>
	<div class="container vertical-center">
  					<form id="login-form" >
  						<h1 style="font-size: 50PX;">AMANOU APP</h1>
  						<center><button class="btn btn-primary" style="color: white;">WELCOME TO THE APP</button></center>
  					</form>
  	</div>			
</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(1){
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">PLASE RELOAD THE PAGE(press f5)</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>