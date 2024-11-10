
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
        <table width="100%">
            <tr align="center">
                <td width="20%"><h1>ML</h1></td>
                <td width="60%" colspan="2" > <nav>
                    <a href="index.html">Home</a>
                    <a href="about.html">About</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="pricing.php">Pricing</a>
                    <a href="inquiry.php">Inquiry</a>
                  </nav></td>
                  <td width="20%" ><a href="login.html">Admin</a></td>
            </tr>
        </table>
    </header>
  <section class="content">

  <?php
    $conn=mysqli_connect('localhost','root','','malcolm');
    if($conn){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $conNo=$_POST['conNo'];
        $pack=$_POST['pack'];
        $loca=$_POST['location'];
        $date=$_POST['date'];
        $msg=$_POST['message'];
        $stat="Pending";
        
        $queSave="INSERT INTO inq(name,ConNo,email,pacID,location,date,msg,status) VALUES('$name','$conNo','$email','$pack','$loca','$date','$msg','$stat')";
        
        if(mysqli_query($conn,$queSave)) {
            echo '<div align="center"><h2>Inquiry Made Successfully!</h2></div>';
        }
        else {
            echo 'error while adding image'.mysqli_error($conn);
        }
    }
    else {
        echo '<h2>Database not connected</h2><br />
        Database is not connected'.mysqli_error($conn);
    }
    ?>
  
    <section class="contact-container">
        <h2>Get in Touch</h2>
        <p>Interested in booking me for your wedding, event, or portrait session? Fill out the form below, and I'll get back to you as soon as possible.</p>
    
        <form action="inqpro.php" method="POST" class="contact-form">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
          </div>
    
          <div class="form-group">
            <label for="conNO">Contact No:</label>
            <input type="text" id="conNO" name="conNo" maxlength="10" placeholder="Enter your Contact No" required>
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
          </div>
    
          <div class="form-group">
            <label for="event">Package Type:</label>
            <label>
              <select name="pack" id="pack" >
                <option selected="selected">-- SELECT -- </option>
                <?php
          $conn=mysqli_connect('localhost','root','','malcolm');
    
          if($conn){
                  $queSea="SELECT * FROM pac";
                  
                  if(mysqli_query($conn,$queSea)){
                      
                      $data=mysqli_query($conn,$queSea);
                          
                          while($val=mysqli_fetch_assoc($data)){

                          echo '<option value="'.$val['pacID'].'">'.$val['pack'].'</option>';
                          } // while
                  } // mysqli_query
          } // $conn
          else {
              echo 'Error while connecting to the database'.mysqli_error($conn);
          }

          
          ?>
              </select>
            </label>
          </div>
    
          <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" placeholder="Event Location">
          </div>
    
          <div class="form-group">
            <label for="date">Event Date:</label>
            <input type="date" id="date" name="date">
          </div>
    
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" placeholder="Additional details"></textarea>
          </div>
    
          <button type="submit" class="submit-btn">Submit</button>
        </form>
      </section>
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
  </footer>
</body>
</html>
