<?php
	session_start();
	if(isset($_SESSION['rn'])){
	
//include 'sessionManager.php'; // Include the session management logic

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABC Company</title>
<link rel="stylesheet" type="text/css" media="all" href="styles.css">
<style>
  html, body {
    margin: 0;
    padding: 0;
    height: 100%; /* Ensure the body fills the entire viewport height */
    font-family: Arial, sans-serif;
    box-sizing: border-box;
}

/* Wrapper to contain header, content, and footer */
  .content {
    min-height: 30vh; /* Ensure the wrapper covers the full viewport height */
    display: flex;
    flex-direction: column; /* Stack elements vertically */
    margin-top: 10px; /* Add some space between header and content */
    font-size= 25px;
}

.gal{
    width: 40%;
}
</style>
</head>
<td></td>
<body>
  
<?php
	echo '<header>
        <table width="100%">
            <tr align="center">
                <td width="20%"><h1>ML</h1></td>
                <td width="60%" colspan="3" > <h1>ADMIN PAGE</h1></td>
                  <td width="20%" ><a href="logout.php">LOG OUT</a></td>
            </tr>
            <tr>
              <td></td>
              <td><a href="gal.php">Gallery management</a></td>
              <td><a href="pac.php">Package management</a></td>
              <td><a href="inq.php">Inquiry management</a></td>
              <td></td>
            </tr>
        </table>
    </header>
  <section class="admin" >
  <table class="gal" align = "center">
				<tr>
                <td width="20%"></td>
					<td align="Center" class="greet"><h2> Welcome!  
					'.$_SESSION['rn'].'</h2> </td>
                    <td width="20%"></td>
				</tr>
</table>
  </section>
  <section class="content">
    <table>
    <tr>
					<td>';
					$conn=mysqli_connect('localhost','root','','malcolm');
					if($conn){
						$path=$_POST['path'];
						$cat=$_POST['select'];
						
						$queSave="INSERT INTO gal(category,path) VALUES('$cat','$path')";
						
						if(mysqli_query($conn,$queSave)) {
							echo '<br/><h2>Image added successfully!</h2> <br />
	<a href="gal.php"> BACK </a>';
						}
						else {
							echo 'error while adding image'.mysqli_error($conn);
						}
					}
					else {
						echo '<h2>Database not connected</h2><br />
						Database is not connected'.mysqli_error($conn);
					}
								
				echo'	</dt>
				</tr>
</table>
  </section>
  <footer>
    <hr>
    <table>
        <tr><td>Malcolm Lismore</td>
        <td>COPYRIGHTS @MALCOLM LISMORE 2024 | All Rights Reserved</td>
        <td>DEV {HK}</td></tr>
        <tr><td>Instagram</td>
        </tr>
        <tr><td>Facebook</td>
           </tr>
    </table>
  </footer>';
	}
?>

</body>
</html>
