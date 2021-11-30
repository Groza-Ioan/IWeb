<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Înregistrare</title>
   <link rel="stylesheet" href="../CSS/style.css" />
</head>

<body>
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

      $nume = $_REQUEST['nume'];
      $prenume = $_REQUEST['prenume'];
      $email = $_REQUEST['email'];
      $subiect = $_REQUEST['subiect'];
      $mesaj = $_REQUEST['mesaj'];
    
      $sql = "INSERT INTO contacts  VALUES ('$nume', '$prenume', '$email', '$subiect', '$mesaj')";
    
      if(mysqli_query($conn, $sql)){
        echo "Mesajul a fost trimis cu succes.";
      } else {
        echo "Ceva a mers gresit."
          . mysqli_error($conn);
      }
    
      mysqli_close($conn); 
    ?>
   
</body>