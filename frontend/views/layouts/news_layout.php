<?php

/* @var $this View */
/* @var $content string */

use yii\helpers\Html;
use yii\web\View;
use frontend\assets\AppAsset;
use common\models\NewsSource;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="<?="../web/statics/assets/img/logo.png"?>" alt="">
        <span>FlexStart</span>
      </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
                <li><a class="nav-link scrollto active" href="index.php#news">News</a></li>
                <li><a class="nav-link scrollto" href="index.php#gallery">Gallery</a></li>
                <li><a class="nav-link scrollto" href="index.php#comments">Comments</a></li>
                <li><a class="nav-link scrollto" href="index.php#pricing">Price</a></li>
                <li><a class="nav-link scrollto" href="index.php#faq">FAQ</a></li>
                <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
                <!-- biandi -->
                <!-- <li><a class="getstarted scrollto" href="#about">Login</a></li> -->
                <?php  if (Yii::$app->user->isGuest) { ?>

                    <?= Html::a('Login', ['site/login'],['class'=>'getstarted scrollto']) ?>

                <?php } else { ?>

                    <li class="nav-link scrollto">
                        <?= Html::beginForm(['/site/logout'], 'post') ?>
                        <?= Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn',
                                'style' =>
                                    'display: flex;
              align-items: center;
              justify-content: space-between;
              font-family: "Nunito", sans-serif;
              font-size: 16px;
              font-weight: 700;
              color: #013289;
              white-space: nowrap;

              background: #4154f1;
              padding: 8px 20px;
              margin-left: 30px;
              border-radius: 4px;
              color: #fff;']) ?>
                        <!-- <?= Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',['class' => 'btn-logout']) ?> -->
                        <?= Html::endForm() ?>
                    </li>

                <?php }  ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><?= Html::a('Home', ['site/index']) ?></li>
                <li><?= Html::a('News', ['site/show-news-list']) ?></li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <?= $content ?>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <?= Html::beginForm() ?>
                                <input type="text" name="search_keywords">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            <?= Html::endForm()?>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">News Source</h3>
                        <div class="sidebar-item categories">
                            <?php
                                $news_sources_num = NewsSource::find()->count();
                                $news_sources = NewsSource::find()->orderBy('source_name ASC')->all();
                            ?>
                            <ul>
                                <?php for($i = 0; $i < $news_sources_num; $i++): ?>
                                    <li>
                                        <?= Html::a($news_sources[$i]->source_name . '(' . $news_sources[$i]->getNewsNum() . ')', ['site/filter-news-source', 'news_source' => $news_sources[$i]->source_name]) ?>
                                    </li>
                                <?php endfor;?>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>FlexStart</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
