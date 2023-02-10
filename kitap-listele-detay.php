<?php
include("header.php");

$sinifsor = $con->prepare("SELECT * FROM siniflar where sinif_id=:sinif_id");
$sinifsor->execute(array(
    'sinif_id'=> $_GET['sinif']
));
$sinifcek = $sinifsor->fetch(PDO::FETCH_ASSOC);


$yayinsor = $con->prepare("SELECT * FROM dersler where yayin_id=:yayin_id");
$yayinsor->execute(array(
    'yayin_id'=> $sinifcek['grup_adi']
));
$yayincek = $yayinsor->fetch(PDO::FETCH_ASSOC);

?>
<link rel="stylesheet" href="css/sinif.css">
<div class="sub-header">
  <div class="sub-header-container">
      <span>Anasayfa > Yayınlar > Türkçe > 5.Sınıf</span>
      <h1>Türkçe</h1>
  </div>
</div> 
<div class="yayin-row">
    <div class="wrapper">
        <div class="yayin-col">
            <img src="images/kitaplar/PNG/5.png" alt="" width="200px" height="250px">
            <a id="sinifbuton" href="">5.Sınıf Türkçe</a>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>