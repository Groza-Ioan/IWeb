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

   <div class="wrapper text">

    <?php
    
      $conn = mysqli_connect("localhost", "root", "", "tehweb");

      if($conn === false){
        die("EROARE: Nu s-a putut conecta."
          . mysqli_connect_error());
      }

      $nume = $_REQUEST['nume'];
      $prenume = $_REQUEST['prenume'];
      $email = $_REQUEST['email'];
      $parola = sha1($_REQUEST['parola']);
    
      $sql = "INSERT INTO users  VALUES ('$nume', '$prenume', '$email', '$parola')";
    
      if(mysqli_query($conn, $sql)){
        echo "Inregistrarea s-a produs cu succes.";
      } else {
        echo "Ceva a mers gresit."
          . mysqli_error($conn);
      }
    
      mysqli_close($conn);
    ?>
   </div>
</body>

</html>