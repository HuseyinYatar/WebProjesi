<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="still.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <style>
    .container-fluid {
      margin-top: 300px;
      padding-top: 80px;
      height: 200px;
      text-align: center;
      align-items: center;
      width: 100%;
    }
  </style>
</head>

<body>

  <?php
  $MainKullanici = "B231210004@sakarya.edu.tr";
  $MainSifre = "B231210004";
  $mesaj = ''; // Mesajı tutmak için boş bir değişken tanımlıyoruz.

  if (isset($_POST['mail'])) {
    // Formdan gelen verileri al
    $Sifre = $_POST['şifre'];
    $Mail = $_POST['mail'];

    if ($Sifre == $MainSifre && $Mail == $MainKullanici) {

      header("Location: GirisBasarili.html");
      
    } else {
      header("Location: GirisBasarisiz.html");
    }
  }
  ?>



  <div class="ust-kisim" style="z-index: -1;">
  </div>
  <div class="container-fluid bg-warning" style="text-align: center;">
      <div class="row justify-content-center">
        <div class="col-12 align-self-center">
          <h1><i class="fa-solid fa-triangle-exclamation"></i><?php echo $mesaj; ?></h4>
        </div>
      </div>
    </div>


</body>

</html>






























<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>