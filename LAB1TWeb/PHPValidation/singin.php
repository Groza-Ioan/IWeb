<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Logare</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
   <link rel="stylesheet" href="../CSS/style.css" />
</head>

<body>
   <div class="menu">
              <li><a href="Povesteamea.html#home" class="active">Home</a></li>
              <li><a href="file:///D:/UTM/LUCRari%20Laboratoare/BD/LAB1/Poveste1.html#ridichia">Textul</a></li>
              <li><a href="singin.php">Logare</a></li>
              <li><a href="signup.php">Înregistrare</a></li>
              <li><a href="info.php">Contact</a></li>
              <li><a href="Imaginip#imagini">Imagini</a></li>        
              <li><a href="Tabel.html#tabel">Tabel</a></li>
   </div>

   <div class="login-box">
      <h1>Logare</h1>
      <form id="form" method="post" action="loginData.php">
         <label>Email:  </label>
         <input type="email" placeholder="" /><br><br>
         <label>Parola: </label>
         <input type="parola" placeholder="" /><br><br>
         <input type="submit" value="Logare" /><br><br>
      </form>
      <p class="Mesaj">
         Nu ai cont? <a href="signup.php">Înregistrează-te aici</a>
      </p>
   </div>

</body>

<style>
  .error {
    color: red;
  }
</style>

<script>
  $(document).ready(function () {
    $('#form').validate({
      rules: {
        email: {
          required: true,
          email: true
        },
        parola: {
          required: true,
          minlength: 8
        }
      },
      messages: {
        email: {
          required: 'Introduceti adresa de Email.',
          email: 'Introduceti o adresa de Email valida.',
        },
        password: {
          required: 'Introduceti parola.',
          minlength: 'Parola trebuie sa contina minim 8 caractere.'
        },
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>

</html>