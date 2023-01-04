<section id="menu">
        <div id="logo">MertMuzik</div>
            <nav>
                <a href="index.php"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
                <a href="login.php"><i class="fa-solid fa-house ikon"></i>Login</a>
                <a href="kayit.php"><i class="fa-solid fa-house ikon"></i>Kayıt Ol</a>
                <a href="panelgiris.php"><i class="fa-solid fa-house ikon"></i>Panel Girisi</a>  
                <a href="kurcek.php"><i class="fa-solid fa-house ikon"></i>Kur Durumu</a>                           
                <a href="hakkimizda.php"><i class="fa-solid fa-circle-info ikon"></i></i>Hakkımızda</a>
                <a href="egitimler.php"><i class="fa-solid fa-user-graduate ikon"></i>Eğitimler</a>
                <a href="ekip.php"><i class="fa-solid fa-people-group ikon"></i>Ekip</a>
                <a href="iletisim.php"><i class="fa-solid fa-map-pin ikon"></i>İletişim</a>

            </nav>
        
    </section>




    <?php 
include("baglanti.php");


if(isset($_POST["kaydet"]))
{
$name=$_POST["kullaniciadi"];
$email=$_POST["email"];
$password=$_POST["parola"];

$ekle="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$name','$email','$password')";
$calistirekle = mysqli_query($baglanti,$ekle);

if ($calistirekle){

    echo '<div class="alert alert-success" role="alert">
    KAYIT BASARILI BİR SEKİLDE GERCEKLESTİ
  </div>';
}
else{

    echo '<div class="alert alert-danger" role="alert">
    KAYIT EKLENİRKEN BİR PROBLEM OLUSTU
  </div>';
}
mysqli_close($baglanti);

}

?>