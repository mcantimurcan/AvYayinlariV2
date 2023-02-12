<?php
include "header.php";
?>
<div role="main" class="main">

    <div class="sub-header">
        <div class="sub-header-container">
            <span>Anasayfa > İletişim</span>
            <h1>İletişim</h1>
        </div>
    </div>

    <div class="my-0 mt-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3057.56452078859!2d32.73458961563916!3d39.97348809040028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d349c1373fb8b1%3A0x9a22f1652441e39b!2sWORK%20PUBLISHING%20GROUP!5e0!3m2!1sen!2str!4v1634511430918!5m2!1sen!2str" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="container">
        <div class="row py-4">
            <div class="col-lg-6">
                <div class="overflow-hidden mb-1">
                    <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">İletişim</strong> Formu</h2>
                </div>
                <div class="overflow-hidden pb-3">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">AV Yayınları'na mail göndermek için aşağıdaki formu kullanabilirsiniz.</p>
                </div>

                <form id="contactForm" class="contact-form" action="" method="POST">
                    <input type=hidden name="oid" value="00D4L000000jaWU">
                    <input type=hidden name="retURL" value="">
                    <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess"><strong>Mesajınız Gönderildi!</strong> En yakın zamanda size geri dönüş sağlayacağız.
                    </div>
                    <div class="contact-form-success alert alert-success d-none mt-4" id="contactError"><strong>Mesajınız Gönderildi!</strong> En yakın zamanda size geri dönüş sağlayacağız.<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="font-weight-bold text-dark text-2" for="first_name">İsim Soyisim</label>
                            <input type="text" id="first_name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="first_name" id="first_name" type="text">
                            <label class="font-weight-bold text-dark text-2" for="phone">Telefon</label>
                            <input type="text" value="" data-msg-required="telefonunuzu giriniz." maxlength="100" class="form-control" name="phone" id="phone" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="font-weight-bold text-dark text-2" for="email">Email</label>
                            <input type="text" value="" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label class="font-weight-bold text-dark text-2" for="message">Mesajınız</label>
                            <textarea maxlength="5000" data-msg-required="Mesajınızı giriniz!" rows="6" class="form-control text-3 h-auto py-2" name="message" id="message" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="form-group col">
                            <input type="submit" value="Mesaj Gönder" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div>
                    <h4 class="mt-2 mb-1">İşler Yayın Grubu <strong>İletişim Bilgileri:</strong></h4>
                    <ul class="list list-icons list-icons-style-2 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Adres:<p>Ostim Mahallesi 1207 Sk <br> Ostim No:3 D:C-D Ankara</p></strong> </li>
                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">
                                <p>Tel: 0850 302 20 90</p>
                        </li>
                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:isler@isler.com.tr">isler@isler.com.tr</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="pt-5">Çalışma <strong>Saatleri</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Pzt - Cum: 09.00 - 18.00</li>
                        <li><i class="far fa-clock top-6"></i> Cumartesi: 09.00 - 18.00</li>
                        <li><i class="far fa-clock top-6"></i> Pazar: Kapalı</li>
                    </ul>
                </div>
                <h4 class="pt-5">Bize <strong>Ulaşın</strong></h4>
                <p class="lead mb-0 text-4">Bize online chat, whatsapp, form, e-mail veya direkt telefon numaramızdan ulaşabilirsiniz. En yakın zamanda ekibimiz size geri dönüş yapacaktır. <br>Sağlıklı günler hep sizinle olsun.</p>
            </div>
        </div>
    </div>
    
</div>
<?php
include "footer.php";
?>