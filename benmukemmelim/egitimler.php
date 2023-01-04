<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
    
    
    <meta charset="UTF-8">
    <title>Anasayfa | Mert Muzik</title>

    <link rel="stylesheet" href="style.css"> 
    
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/d82463d230.js" crossorigin="anonymous"></script>

</head>
<body>
   <?php require 'ustmenu.php' ?>
    
    
    <section id="egitimler">
        <div class="container">

            <h3>Eğitimler</h3>
            <div class="owl-carousel owl-theme">
            <div class="card item" data-merge=1.5>
                <img src="img/r11.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">Gitar Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, tenetur?
                </p>
            </div>
            
            <div class="card item" data-merge=1.5>
                <img src="img/r11.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">Gitar Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, tenetur?
                </p>
            </div>
            
            <div class="card item" data-merge=1.5>
                <img src="img/r11.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">Gitar Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, tenetur?
               </p>
            </div>
           

            </div>

        </div>
    </section>
   
    
    <script
  src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
  integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo="
  crossorigin="anonymous"></script>
    
    <script src="owl/owl.carousel.min.js">

</script>
<script src="owl/script.js"></script>
</body>
</html>

<?php

include("baglanti.php");
if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
    
    if($baglanti->query($ekle)===TRUE)
    {
     echo "<script>alert('mesajiniz basari ile gonderilmistir')</script>";
    }
    else
    {
        echo "<script>alert('bir hata olustu')</script>";
    }

}



?>