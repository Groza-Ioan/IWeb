<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Contact</title>
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

   <div class="contact-box">
      <h1>Contactează-ne</h1>
      <h4>Dacă ai întrebări sau sugestii poți să ne scrii un mesaj</h4>
      <form id="form" method="post" action="contactData.php">
         <label for="nume">Nume</label>
         <input type="text" placeholder="" name="nume" id="nume" /><br><br>
         <label for="prenume">Prenume</label>
         <input type="text" placeholder="" name="prenume" id="prenume" /><br><br>
         <label for="email">Email</label>
         <input type="email" placeholder="" name="email" id="email" /><br><br>
         <label for="subiect">Subiect</label>
         <input type="text" placeholder="" name="subiect" id="subiect" /><br><br>
         <label for="mesaj">Mesaj</label>
         <input type="textarea" placeholder="" name="mesaj" id="mesaj" style="height: 200px" /><br><br>
         <input type="submit" value="Trimite" style="width: 320px; margin-left: 50%" />
      </form>
      <p class="Mesaj">
         Răspunsul la mesajul dumneavoastră va veni timp de 24 de ore.
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
        subiect: {
          required: true
        },
        Mesaj: {
          required: true
        },
      messages: {
        nume: 'Introduceti numele.',
        prenume: 'Introduceti prenumele.',
        email: {
          required: 'Introduceti adresa de Email.',
          email: 'Introduceti o adresa de Email valida.',
        },
        subiect: 'Introduceti subiectul.',
        Mesaj: 'Introduceti mesajul.',
      },
      submitHandler: function (form) {
        form.submit();
      }
    }
    });
  });
</script>

</html>