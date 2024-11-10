<?php
	session_start();
	if(isset($_SESSION['rn'])){
	
//include 'sessionManager.php'; // Include the session management logic

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inquiry management</title>
<link rel="stylesheet" type="text/css" media="all" href="styles.css">
<style>
.gal td {
padding: 5px;
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
  <table >
				<tr>
                <td width="20%"></td>
					<td align="Center" class="greet"><h2> Welcome!  
					'.$_SESSION['rn'].'</h2> </td>
                    <td width="20%"></td>
				</tr>
</table>
  </section>
  <section class="content">';
	
    $conn=mysqli_connect('localhost','root','','malcolm');
    if($conn){
            $queSea="SELECT * FROM inq";
            if(mysqli_query($conn,$queSea)){
                $data=mysqli_query($conn,$queSea);
                echo ' <table class="gal" cellpadding="1" width="100%" table-layout="fixed" border="0" >
                    <tr>
                        <th bgcolor="#aeafb2">ID</th>
                        <th bgcolor="#aeafb2">Name</th>
                        <th bgcolor="#aeafb2">Email</th>
                        <th bgcolor="#aeafb2">Package</th>
                        <th bgcolor="#aeafb2">Location</th>
                        <th bgcolor="#aeafb2">Date</th>
                        <th bgcolor="#aeafb2">Message</th>
                        <th bgcolor="#aeafb2">Status</th>
                        <th>&nbsp;</th>
                    </tr>';
                    while($val=mysqli_fetch_assoc($data)){
                    echo '
                    <tr style="text-align:left;">
                        <td>'.$val['inqID'].'</td>
                        <td>'.$val["name"].'</td>
                        <td>'.$val['email'].'</td>';
                        $id = $val['pacID'];
                        $queSea="SELECT * FROM pac WHERE pacID='$id'";
                  if(mysqli_query($conn,$queSea)){
                    $res=mysqli_query($conn,$queSea);
                    $pacval=mysqli_fetch_assoc($res);
                          echo '<td>'.$pacval["pack"].'</td>';
                  } echo'
                        <td>'.$val['location'].'</td>
                        <td>'.$val['date'].'</td>
                        <td>'.$val['msg'].'</td>
                        <td>'.$val['status'].'</td>
                        <td><a href="inqmark.php?id='.$val['inqID'].'">Mark as cheked</a></td>
                    </tr>';
                    } // while
                        echo '</table>';
            } // mysqli_query
    } // $conn
    else {
        echo 'Error while connecting to the database'.mysqli_error($conn);
    }
    
    echo '
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
