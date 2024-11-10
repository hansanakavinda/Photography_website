<?php
	session_start();
	if(isset($_SESSION['rn'])){
	
 //include 'sessionManager.php'; 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Page</title>
<link rel="stylesheet" type="text/css" media="all" href="styles.css">
<style>

</style>
</head>

<body>
<?php
	echo '<header>
        <table width="100%">
            <tr align="center">
                <td width="20%"><h1>ML</h1></td>
                <td width="60%" colspan="2" > <h1>ADMIN PAGE</h1></td>
                <td width="20%" ><a href="logout.php">LOG OUT</a></td>
            </tr>
        </table>
    </header>
  <section class="admin" >
  <table >
				<tr>
					<td align="Center" class="greet"><h2> Welcome!  
					'.$_SESSION['rn'].'</h2> </td>
				</tr>
			</table>
  </section>
  </section>
  <section class="content">
   <table width="100%" >
				<tr align="center">
					<td><a href="gal.php">Gallery management</a></td>
				</tr >
        <tr><td><br></td></tr>
                <tr align="center">
					<td><a href="pac.php">Package management</a></td>
				</tr >
        <tr><td><br></td></tr>
                <tr align="center">
					<td><a href="inq.php">Inquiry management</a></td>
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
