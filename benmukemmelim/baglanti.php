 <?php 
 
 $vt_sunucu="localhost";
 $vt_kullanici="root";
 $vt_sifre="";
 $vt_adi="mertozdemir";
 
 $baglanti=mysqli_connect($vt_sunucu, $vt_kullanici,$vt_sifre,$vt_adi);

if(!$baglanti)
{
die("veritabani baglanti islemi basarisiz".mysqli_connect_error());
}
else
{
    echo "baglanti basarili";
}



 ?>