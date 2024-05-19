<?php
  $MainKullanici = "B231210004@sakarya.edu.tr";
  $MainSifre = "B231210004";
  $mesaj = ''; // Mesajı tutmak için boş bir değişken tanımlıyoruz.

  if (isset($_POST['mail'])) {
    // Formdan gelen verileri al
    $Sifre = $_POST['şifre'];
    $Mail = $_POST['mail'];

    if ($Sifre == $MainSifre && $Mail == $MainKullanici) 
    {
        echo'qwemqwkl';
      header("Location: GirisBasarili.html");
      exit();
      
    } else {
      header("Location: GirisBasarisiz.html");
      exit();
    }
  }
  ?>
