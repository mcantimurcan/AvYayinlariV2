<?php
include("header.php");

$yayinsor = mysqli_query($con, "SELECT * FROM dersler");

?>
<div class="sub-header">
  <div class="sub-header-container">
    <span>Anasayfa > Yayınlar</span>
    <h1>Yayınlarımız</h1>
  </div>
</div>
<section class="yayinlarimiz">
  <label for="">Yayınlarımız</label>
  <h2>Akıllı Versiyon Yayınları Listesi</h2>

  <div class="yayin-row row mt-3 text-center">
    <?php
    while ($yayincek = mysqli_fetch_assoc($yayinsor)) {
    ?>
      <div class="yayin-col">
        <i class="<?php echo $yayincek['yayin_logo'] ?>"></i>
        <h3><?php echo $yayincek['yayin_adi'] ?></h3>
        <a href="siniflar.php?yayin=<?php echo $yayincek['yayin_id'] ?>" class="yayin-btn">Görüntüle</a>
      </div>
    <?php } ?>
  </div>
</section>
<!--footer section-->
<?php
include("footer.php");
?>