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
$conn=mysqli_connect('localhost','root','','malcolm');
if($conn){
    if(isset($_GET['id'])) {
    
        $id = $_GET['id'];

        $stat="Checked";
				
			
		$queUp="UPDATE inq SET status='$stat' WHERE inqID='$id'";
				
				if(mysqli_query($conn,$queUp)){
					header("location:inq.php");
				}

	
  }//isset($_GET['id'
	}//conn
	else {
		echo 'Coudldnot connect to database'.mysqli_error($conn);
	}
	}
?>

</body>
</html>
