<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Înregistrare</title>
   <link rel="stylesheet" href="../CSS/style.css" />
</head>

<body onload="Cookies()">
   <div class="menu">
              <li><a href="Povesteamea.html#home" class="active">Home</a></li>
              <li><a href="file:///D:/UTM/LUCRari%20Laboratoare/BD/LAB1/Poveste1.html#ridichia">Textul</a></li>
              <li><a href="login.php">Logare</a></li>
              <li><a href="signup.php">Înregistrare</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="Imaginip#imagini">Imagini</a></li>        
              <li><a href="Tabel.html#tabel">Tabel</a></li>
   </div>

   

    <?php
    
      $conn = mysqli_connect("localhost", "root", "", "tehweb");

      if($conn === false){
        die("EROARE: Nu s-a putut conecta."
          . mysqli_connect_error());
      }

      $email = $_REQUEST['email'];
      $parola = sha1($_REQUEST['parola']);
    
      $sql = "SELECT * FROM users WHERE email = '$email' AND parola = '$parola'";

      if(mysqli_query($conn, $sql)){
         echo "Logarea s-a produs cu succes.";
      }
    
      mysqli_close($conn);
    ?>
   
</body>

</html>