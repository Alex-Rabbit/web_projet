<?php
/*
./app/vues/template/index.php
Template principal
*/
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <?php include '../app/vues/template/partials/_head.php'; ?>
</head>
<body>
<!-- Preloader Start -->
<div id="preloader-active">
  <?php include '../app/vues/template/partials/_preloader.php'; ?>
</div>
<!-- Preloader Start-->
<header>
    <!-- Header Start -->
    <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                          <?php include '../app/vues/template/partials/_logoHeader.php'; ?>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <?php include '../app/vues/template/partials/_nav.php'; ?>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <?php echo $content; ?>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                      <?php include '../app/vues/template/partials/_search.php'; ?>

                      <?php include '../app/vues/template/partials/_category.php'; ?>

                      <?php include '../app/vues/template/partials/_tag.php'; ?>

                      <?php include '../app/vues/template/partials/_newsletter.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-main" data-background="assets/img/gallery/section_bg4.png">
      <?php include '../app/vues/template/partials/_footer.php'; ?>
        <!-- footer-bottom area -->
        <?php include '../app/vues/template/partials/_footerBottom.php'; ?>
    </div>
    <!-- Footer End-->
</footer>

<!-- JS here -->
  <?php include '../app/vues/template/partials/_script.php'; ?>
</body>
</html>
