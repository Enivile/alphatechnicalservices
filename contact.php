<!DOCTYPE html>
<html lang="en">
<?php include_once('./include/head.php'); ?>
    <body>
        <?php include './include/sections/preloader.php'; ?>
        <!--====== Start Header ======-->
        <?php include_once('./include/header-2.php'); ?>
        <!--====== End Header ======-->
        <!--====== Start breadcrumbs section ======-->
        <section class="breadcrumbs-section bg_cover" style="background-image: url(assets/images/bg/contact.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="breadcrumbs-content">
                            <h1>Contact Us</h1>
                            <ul class="link">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End breadcrumbs section ======-->
        <!--====== Start Contact-page-section ======-->
        <section class="contact-page-section pt-120 pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-list">
                            <div class="info-box d-flex align-items-start mb-45">
                                <div class="icon">
                                    <i class="icofont-headphone-alt-3"></i>
                                </div>
                                <div class="info">
                                    <h4>Call Us</h4>
                                    <p><a href="tel:+966595226144">+966 595 226 144</a></p>
                                </div>
                            </div>
                            <div class="info-box d-flex align-items-start mb-45">
                                <div class="icon">
                                    <i class="icofont-email"></i>
                                </div>
                                <div class="info">
                                    <h4>E-mail</h4>
                                    <p><a href="mailto:info@atslco.com">info@atslco.com</a></p>
                                </div>
                            </div>
                            <div class="info-box d-flex align-items-start mb-45">
                                <div class="icon">
                                    <i class="icofont-location-pin"></i>
                                </div>
                                <div class="info">
                                    <h4>Address</h4>
                                    <p>Building no 3881,Al Dana District,Al Jubail, Saudi Arabia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-wrapper">
                            <div class="section-title mb-50">
                                <h2>Get In Touch</h2>
                                <div class="title-span-line">
                                    <span class="line line-1"></span>
                                    <span class="line line-2"></span>
                                    <span class="line line-3"></span>
                                </div>
                            </div>
                            <div class="contact-form">
                                <form action="./forms/contact-form.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="email" name="email" class="form_control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Subject" name="subject" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Phone" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea class="form_control" name="message" placeholder="Message here...."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact-page-section ======-->
        <!--====== Start contact_map section ======-->
        <section class="contact-map-section">
            <div class="map_box">
                <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.3686511617607!2d49.56187328058846!3d27.144688915941458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e350fcd7d17eced%3A0x936563827bc36c89!2s3881%20Danah%20Rd%2C%20Fanateer%2C%20Al%20Jubayl%2035814%2C%20Saudi%20Arabia!5e0!3m2!1sen!2s!4v1711045830440!5m2!1sen!2s"></iframe>
            </div>
        </section><!--====== End contact_map section ======-->
        <!--====== Start Footer ======-->
        <?php include_once('./include/footer.php'); ?>
        <!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="flaticon-up-arrow-angle"></i></a>
        <!--====== Jquery js ======-->
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="assets/js/slick.min.js"></script>
        <!--====== Magnific Popup js ======-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!--====== nice-select js ======-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--====== counterup js ======-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--====== waypoints js ======-->
        <script src="assets/js/waypoints.min.js"></script>
        <!--====== Main js ======-->
        <script src="assets/js/main.js"></script>
    </body>
</html>