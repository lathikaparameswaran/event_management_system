<html>
<style>
	.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style>
</html>

<?php

include("connection.php");

$id=mt_rand(100,1000);
	$name=$_POST['name'];
	$ph=$_POST['ph'];
	$e_name=$_POST['e_name'];
	$date=$_POST['date'];
	$count=$_POST['count'];
	$plan=$_POST['plan'];



if(!empty($name) && !empty($ph)  && !empty($e_name) && !empty($date) && !empty($count) && !empty($plan))
{
	if(isset($_POST['submit']))
	{
	





	$query="insert into login_details values('','$name',$ph,'$date','$e_name',$count,'$plan')";
	$res=mysqli_query($con,$query);

		
?>

		<div class="alert">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  		This is an alert box.
		</div>
<?php
		
	}
	else
	{
		
		header("Location:login.php?unsucessfull");
	}
}


else
{
	?>
	<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  All fields must be entered..
</div>

<?php

}
?>
