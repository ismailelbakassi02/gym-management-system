<style>
	.btn-primary{
		background-color: #6c1130;
		color: white;
	}
	.btn-primary:hover{
		background-color: black;

	}
.btn  {
	border-radius: 10px;
	margin: 2px;
}
.btn:hover{
	 box-shadow: 2px 2px  black;
           transition: all 0.1s ease;
}

</style>
<?php 

$conn= new mysqli('localhost','root','','gym_db')or die("Could not connect to mysql".mysqli_error($conn));
?>
     <link rel="icon" href="favicon.jpg" type="image/x-icon">
