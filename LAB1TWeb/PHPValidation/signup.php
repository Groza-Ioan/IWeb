<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Înregistrare</title>
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

   <div class="signup-box">
      <h1>Înregistrare</h1>
      <h4>Este gratis și îți va lua doar câteva minute!</h4>
      <form id="form" method="post" action="signupData.php">
         <label for="nume">Nume</label>
         <input type="text" placeholder="Nume" name="nume" id="nume"/><br><br>
         <label for="prenume">Prenume</label>
         <input type="text" placeholder="Prenume" name="prenume" id="prenume"/><br><br>
         <label for="email">Email</label>
         <input type="email" placeholder="Email" name="email" id="email"/><br><br>
         <label for="parola">Parola</label>
         <input type="password" placeholder="" name="parola" id="parola"/><br><br>
         <label for="confirmParola">Confirmați parola</label>
         <input type="password" placeholder="" name="confirmParola" id="confirmParola"/><br><br>
         <input type="submit" value="Înregistrare" />
      </form>
      <p class="Mesaj">
         Deja ai cont? <a href="login.php">Loghează-te aici</a>
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
        nume: {
          required: true
        },
        prenume: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        parola: {
          required: true,
          minlength: 8
        },
        confirmParola: {
          required: true,
          equalTo: "#parola"
        }
      },
      messages: {
        nume: 'Introduceti numele.',
        prenume: 'Introduceti prenumele.',
        email: {
          required: 'Introduceti adresa de Email.',
          email: 'Introduceti o adresa de Email valida.',
        },
        password: {
          required: 'Introduceti parola.',
          minlength: 'Parola trebuie sa contina minim 8 caractere.',
        },
        confirmPassword: {
          required: 'Confirmati parola.',
          equalTo: 'Parola confirmata nu corespunde Parolei introduse.',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>

</html>