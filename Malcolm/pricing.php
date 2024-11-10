<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    <?php $conn=mysqli_connect('localhost','root','','malcolm');
          if($conn){
    ?>
  <section class="content">
    <h2>Wedding Packages</h2>
    <section class="pricing wedding">
    <?php 
        $queSea="SELECT * FROM pac WHERE cat='Wedding'";
        
        if(mysqli_query($conn,$queSea)){
                          
          $data=mysqli_query($conn,$queSea);
                            
          while($val=mysqli_fetch_assoc($data)){
            $id = $val['galID'];
            $queSea="SELECT * FROM gal WHERE id='$id'";
                    
            if(mysqli_query($conn,$queSea)){
              $res=mysqli_query($conn,$queSea);
              $galval=mysqli_fetch_assoc($res);

              echo '<div class="package"><h3>'.$val['pack'].'</h3> <P>
              '.$val['det'].'</P></div>
              <img src="'.$galval['path'].'" alt="Wedding">';
              }
            } // while
          } // mysqli_query
          ?>
                </section>
<br>
                <h2>Portrait Packages</h2>
                <section class="pricing portrait">
                <?php
         
                  $queSea="SELECT * FROM pac WHERE cat='Portrait'";
                  
                  if(mysqli_query($conn,$queSea)){
                      
                      $data=mysqli_query($conn,$queSea);
                          
                          while($val=mysqli_fetch_assoc($data)){
                            $id = $val['galID'];
                            $queSea="SELECT * FROM gal WHERE id='$id'";
                  
                  if(mysqli_query($conn,$queSea)){
                    $res=mysqli_query($conn,$queSea);
                    $galval=mysqli_fetch_assoc($res);

                          echo '<div ><h3>'.$val['pack'].'</h3> <P>
            '.$val['det'].'</P></div>
        <img src="'.$galval['path'].'" alt="Portrait">';
                  }
                          } // while
                  } // mysqli_query
          
          ?>
                            </section>
                            <br>
    <h2>Event Photography Packages</h2>
    <section class="pricing event">
                <?php
                  $queSea="SELECT * FROM pac WHERE cat='Event'";
                  
                  if(mysqli_query($conn,$queSea)){
                      
                      $data=mysqli_query($conn,$queSea);
                          
                          while($val=mysqli_fetch_assoc($data)){
                            $id = $val['galID'];
                            $queSea="SELECT * FROM gal WHERE id='$id'";
                  
                  if(mysqli_query($conn,$queSea)){
                    $res=mysqli_query($conn,$queSea);
                    $galval=mysqli_fetch_assoc($res);

                          echo '<div ><h3>'.$val['pack'].'</h3> <P>
            '.$val['det'].'</P></div>
        <img src="'.$galval['path'].'" alt="Event">';
                  }
                          } // while
                  } // mysqli_query

          
          ?>
                            </section>
                            <br>
                            <h2>Landscape and Wildlife Photography Prints</h2>
    <section class="pricing prints">
                <?php
         
    
                  $queSea="SELECT * FROM pac WHERE cat='Prints'";
                  
                  if(mysqli_query($conn,$queSea)){
                      
                      $data=mysqli_query($conn,$queSea);
                          
                          while($val=mysqli_fetch_assoc($data)){
                            $id = $val['galID'];
                            $queSea="SELECT * FROM gal WHERE id='$id'";
                  
                  if(mysqli_query($conn,$queSea)){
                    $res=mysqli_query($conn,$queSea);
                    $galval=mysqli_fetch_assoc($res);

                          echo '<div ><h3>'.$val['pack'].'</h3> <P>
            '.$val['det'].'</P></div>
        <img src="'.$galval['path'].'" alt="Prints">';
                  }
                          } // while
                  } // mysqli_query
          ?>
                            </section>
</section>
<?php
} // $conn
else {
    echo 'Error while connecting to the database'.mysqli_error($conn);
}
?>

    
<footer>
      <hr>
      <table width="100%">
        <tr>
          <td>Malcolm Lismore</td>
          <td>COPYRIGHTS @MALCOLM LISMORE 2024 | All Rights Reserved</td>
          <td>DEV {HK}</td>
        </tr>
        <tr>
          <td>
            <!-- Social Media Icons -->
            <a href="https://www.instagram.com" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.twitter.com" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </td>
        </tr>
      </table>
    </footer>
</body>
</html>
