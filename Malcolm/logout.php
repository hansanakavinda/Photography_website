<?php
	session_start();
	if(isset($_SESSION['rn'])){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	$rn=$_SESSION['rn'];
	$conn=mysqli_connect('localhost','root','','malcolm');
	if($conn)
	{
		$quemax="SELECT MAX(logNo) FROM log GROUP BY rn HAVING
		rn='$rn' ORDER BY logNo DESC LIMIT 1";
		
		if(mysqli_query($conn,$quemax))
		{
			$data=mysqli_query($conn,$quemax);
			$val=mysqli_fetch_assoc($data);
			$se=$val["MAX(logNo)"];
			
			$queUp="UPDATE log SET lout=(now()) WHERE logNO='$se'";
			if(mysqli_query($conn,$queUp))
			{
				header("location:index.html");
			}
			else
			{
				echo 'Login Schedule not Updated'.mysqli_error($conn);
			}
		}
	}
	else
	{
		echo 'Connection error'.mysqli_error($conn);
	}
	}
?>
</body>
</html>
