<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In Page</title>

<style type="text/css">
	

body,td,th {
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
body {
	background-image: url('img/home1.jpg'); 
	background-size: cover;
	background-color: #3a3a3acd;
	margin:0px;
}



.style1 {
	font-size:30px;
	font-weight: bold;
	color:#ffffff;
	}
	
.style2 {
	font-weight: bold;
	color: #ffffff;
	}	

	
.style3 {
	font-size: 20px;
	font-weight: bold;
	color:#000;
	border:none;
	border-radius: 5px;
	padding: 5px 10px;
	background-color:#FF3300;
	transition: all 0.3s ease;
	
}

.style3:hover {
	font-size: 20px;
	font-weight: bold;
	color:#000;
	border:none;
	border-radius: 5px;
	padding: 5px 10px;
	background-color:#FF3300;
	transform: scale(1.1);
	
}

.style5 {font-size: 20px; color: #000000; font-weight: bold;
border:none;
border-radius: 5px;
padding: 5px 10px;
background-color:#00FF99;
transition: all 0.3s ease;}

.style5:hover {font-size: 20px; color: #000000; font-weight: bold;
border:none;
border-radius: 5px;
padding: 5px 10px;
background-color:#00FF99;
transform: scale(1.1);}

#un {
border:none;
border-radius: 15px;
padding: 5px 10px;}

#pw {
border:none;
border-radius: 15px;
padding: 5px 10px;}

</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="logPro.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table class="login" width="30%" border="0" align="center" cellpadding="5" cellspacing="0" >
    <tr >
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><span class="style1" >LOGIN</span></div></td>
      <td width="33%" rowspan="4" ></td>
    </tr>
    <tr>
      <td width="30%" class="style2"><p><strong>Username</strong></p></td>
      <td width="36%"><label>
        <input name="un" type="text" id="un" size="30" maxlength="50" />
        <br />
      </label></td>
    </tr>
    <tr>
      <td class="style2"><p><strong>Password</strong></p></td>
      <td><input name="pw" type="text" id="pw" size="30" maxlength="50" /></td>
    </tr>
    <tr><td colspan=""></td></tr>
    <tr>
      <td rowspan="2" colspan="2"><div align="center">
        <input name="log" type="submit" class="style5" id="log" value="LOGIN" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="cl" type="reset" class="style3" id="cl" value="CLEAR" />
      </div></td>
    </tr>
    <tr >
      <td colspan="5">&nbsp;</td>
    </tr>
	<tr class="style2">
      <td colspan="5"> <?php
	$un = $_POST['un'];
	$pw = $_POST['pw'];
	
	$conn=mysqli_connect('localhost','root','','malcolm');
	
	if($conn){
	$queCk="SELECT * FROM users WHERE un='$un' AND pw='$pw'";
		if(mysqli_query($conn,$queCk)){
			$res=mysqli_query($conn,$queCk);
			if(mysqli_num_rows($res)>0){
				$val=mysqli_fetch_assoc($res);
				if($val["pw"]==$pw){
					$_SESSION['rn']=$val["rn"];
					$rn=$_SESSION['rn'];
					$queLog="INSERT INTO log(rn,lin) VALUES('$rn',(now()))";
					if(mysqli_query($conn,$queLog)){
						header("location:main.php");
					}
				}
			} else{
				echo 'Incorrect Username or Password<br />';
			}
		} else{
			echo 'Loggin Query Error'.mysqli_error($conn);
		}
	} else {
		echo 'database not connected'.mysqli_error($conn);
	}
	
?></td>
    </tr>
  </table>
</form>
</body>
</html>

