<?php
include("header.php");


$sinifsor = $con->prepare("SELECT * FROM siniflar where grup_adi=:grup_adi");
$sinifsor->execute(array(
    'grup_adi'=> $_GET['yayin']
));

$yayinsor = $con->prepare("SELECT * FROM dersler where yayin_id=:yayin_id");
$yayinsor->execute(array(
    'yayin_id'=> $_GET['yayin']
));
$yayincek = $yayinsor->fetch(PDO::FETCH_ASSOC);

?>

<div class="sub-header">
  <div class="sub-header-container">
    <span>Anasayfa > Yayınlar > <?php echo $yayincek['yayin_adi'] ?></span>
    <h1><?php echo $yayincek['yayin_adi'] ?></h1>
  </div>
</div>
<section class="cozumler">
  <label for="">Yayınlarımız</label>
  <h2>Akıllı Versiyon Yayınları Listesi</h2>

  <div class="yayin-row row mt-5 text-center">
    <?php
    while ($sinifcek = $sinifsor->fetch(PDO::FETCH_ASSOC)) {
    ?>
      <div class="yayin-col">
        <i class="fa-solid fa-school"></i>
        <h3><?php echo $sinifcek['sinif_adi'] ?></h3>
        <a href="kitap-listele-detay.php?sinif=<?php echo $sinifcek['sinif_id'] ?>" class="yayin-btn">Görüntüle</a>
      </div>
    <?php } ?>
</section>
<?php
include("footer.php");
?>