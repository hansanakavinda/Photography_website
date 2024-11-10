<?php
	session_start();
	if(isset($_SESSION['rn'])){
	
//include 'sessionManager.php'; // Include the session management logic

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery management</title>
<link rel="stylesheet" type="text/css" media="all" href="styles.css">
<style>

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
  <section class="content">
  <form id="form1" name="form1" method="post" action="addgalpro.php">
  <table class="data" align="center" cellpadding="5" cellspacing="0" >
    <tr class="form-group">
      <td colspan="3"  ><strong>Add Image</strong></td>
    </tr>
    
    <tr class="form-group">
      <td >Image Category</td>
      <td><label>
        <select name="select" id="select">
          <option selected="selected">--SELECT--</option>
          <option value="Landscape">Landscape</option>
          <option value="Wildlife">Wildlife</option>
          <option value="Birds">Birds</option>
          <option value="Wedding">Wedding</option>
          <option value="Portrait">Portrait</option>
        </select>
      </label></td>
      <td ></td>
    </tr>
    <tr class="form-group">
      <td class="style16">Path</td>
      <td ><input name="path" type="text" id="path" size="30" maxlength="100" /></td>
    </tr>
    <tr class="form-group">
      <td ><span class="style16"></span></td>
      <td ><span class="style16">
        <label>
        <input name="Save" type="submit" class="save-btn" id="Save" value="Save" />
        </label>
      </span></td>
      <td ><span >
        <input name="clear" type="reset" class="clear-btn" id="clear" value="Clear" />
      </span></td>
    </tr>
    <tr >
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>
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
