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

    <section class="content">
        <section class="gallery">
            <h3 ><a href="gallery.php">Scottish landscape</a></h3>
            <h3 ><a href="gallery1.php">natural wildlife</a></h3>
            <h3 class="current">coastal birds</h3>
            <?php
          $conn=mysqli_connect('localhost','root','','malcolm');
    
          if($conn){
                  $queSea="SELECT * FROM gal WHERE category='Birds'";
                  
                  if(mysqli_query($conn,$queSea)){
                      
                      $data=mysqli_query($conn,$queSea);
                          
                          while($val=mysqli_fetch_assoc($data)){
                          
                          echo '<img src="'.$val['path'].'" alt="Coastal Birds" class="gallery-img" onclick="openLightbox(this)">';
                          } // while
                  } // mysqli_query
          } // $conn
          else {
              echo 'Error while connecting to the database'.mysqli_error($conn);
          }

          
          ?>

 </section>
    </section>

    <div id="lightbox" class="lightbox" onClick="closeLightbox()">
        <img id="lightbox-img" src="" alt="Popup Image">
    </div>

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

    <script>
        // Open the lightbox with smooth fade-in effect
        function openLightbox(img) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            lightboxImg.src = img.src; // Set clicked image as the lightbox image
            lightbox.classList.add('show'); // Add 'show' class to fade in

            // Listen for Escape key to close lightbox
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeLightbox();
                }
            });
        }

        // Close the lightbox with smooth fade-out effect
        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.remove('show'); // Remove 'show' class to fade out
        }
    </script>
</body>
</html>
