<?php
use common\models\Faq;

/* @var $this yii\web\View */

use common\models\News;
use common\models\Gallery;
use common\models\Motto;
use common\models\Price;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">

                        <!-- <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"> -->
                        <?php  if (Yii::$app->user->isGuest) { ?>
                            <a href="index.php?r=site/login" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Login</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        <?php } ?>
                        <!-- <a href="index.php?r=site/login" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"> -->
                            <!-- <span>Login</span> -->
                            <!-- <i class="bi bi-arrow-right"></i> -->
                        <!-- </a> -->
                        <!-- <div class="form-group"> -->
                            <!-- <?= Html::a('Login', ['site/login','class'=>'btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center']) ?> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="../web/statics/assets/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Who We Are</h3>
                        <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
                        <p>
                            Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="../web/statics/assets/img/about.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2><?= Html::a('News', ['site/show-news-list']) ?></h2>
                <p>Latest News</p>
            </header>

            <div class="row">
                <?php $latest_news = News::find()->orderBy('news_date DESC')->limit(3)->all(); ?>
                <?php foreach($latest_news as $news):?>
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="<?="../../common/static/images/news/" . $news->news_photo?>" class="img-fluid" alt=""></div>
                            <span class="post-date"><?=$news->news_date?></span>
                            <h3 class="post-title"><?=$news->news_title?></h3>
                            <?= Html::a('<span>Read More</span><i class="bi bi-arrow-right"></i>', ['site/show-news-content','news_id' => $news->news_id]) ?>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>

            <br><br>

            <header class="section-header">
                <h2><?= Html::a('<span>All News</span><i class="bi bi-arrow-right"></i>', ['site/show-news-list']) ?></h2>
            </header>


        </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Our Values</h2>
                <p>Odit est perspiciatis laborum et dicta</p>
            </header>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <img src="../web/statics/assets/img/values-1.png" class="img-fluid" alt="">
                        <h3>Ad cupiditate sed est odio</h3>
                        <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="../web/statics/assets/img/values-2.png" class="img-fluid" alt="">
                        <h3>Voluptatem voluptatum alias</h3>
                        <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="../web/statics/assets/img/values-3.png" class="img-fluid" alt="">
                        <h3>Fugit cupiditate alias nobis.</h3>
                        <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Features</h2>
                <p>Laboriosam et omnis fuga quis dolor direda fara</p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="assets/img/features.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Eos aspernatur rem</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Facilis neque ipsa</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Volup amet voluptas</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Rerum omnis sint</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Alias possimus</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Repellendus mollitia</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- / row -->

            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-6">
                    <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
                        </li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                            </div>
                            <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Incidunt non veritatis illum ea ut nisi</h4>
                            </div>
                            <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                            </div>
                            <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Incidunt non veritatis illum ea ut nisi</h4>
                            </div>
                            <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab3">
                            <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                            </div>
                            <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Incidunt non veritatis illum ea ut nisi</h4>
                            </div>
                            <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
                        </div><!-- End Tab 3 Content -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <img src="assets/img/features-2.png" class="img-fluid" alt="">
                </div>

            </div><!-- End Feature Tabs -->

            <!-- Feature Icons -->
            <div class="row feature-icons" data-aos="fade-up">
                <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-line-chart-line"></i>
                                <div>
                                    <h4>Corporis voluptates sit</h4>
                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-stack-line"></i>
                                <div>
                                    <h4>Ullamco laboris nisi</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-brush-4-line"></i>
                                <div>
                                    <h4>Labore consequatur</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-magic-line"></i>
                                <div>
                                    <h4>Beatae veritatis</h4>
                                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="ri-command-line"></i>
                                <div>
                                    <h4>Molestiae dolor</h4>
                                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="ri-radar-line"></i>
                                <div>
                                    <h4>Explicabo consectetur</h4>
                                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div><!-- End Feature Icons -->

        </div>

    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Services</h2>
                <p>Veritatis et dolores facere numquam et praesentium</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Nesciunt Mete</h3>
                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Eosle Commodi</h3>
                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Ledo Markt</h3>
                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Asperiores Commodi</h3>
                        <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Velit Doloremque.</h3>
                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box pink">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Dolori Architecto</h3>
                        <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Pricing</h2>
                <p>Prices of items during Russian-Uzbekistan War</p>
            </header>

            <div class="row gy-4" data-aos="fade-left">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
              <span class="featured">
                  <?php
                  $t_id = 1;
                  $t_item = Price::findIdentity($t_id);
                  $t_class = $t_item -> getClass();
                  echo $t_class
                  ?>
              </span>
                        <h3 style="color: #07d5c0;">
                            <?php
                            $t_id = 1;
                            $t_item = Price::findIdentity($t_id);
                            $t_name = $t_item -> getItemName();
                            echo $t_name
                            ?>
                        </h3>
                        <div class="price">
                            <sup>
                                <?php
                                $t_id = 1;
                                $t_item = Price::findIdentity($t_id);
                                $t_currency = $t_item -> getCurrency();
                                echo $t_currency
                                ?>
                            </sup>
                            <?php
                            $t_id = 1;
                            $t_item = Price::findIdentity($t_id);
                            $t_price = $t_item -> getPrice();
                            echo $t_price
                            ?>
                            <span>
                      <?php
                      $t_id = 1;
                      $t_item = Price::findIdentity($t_id);
                      $t_measurement = $t_item -> getMeasurement();
                      $t_measure = "/ ".$t_measurement;
                      echo $t_measure
                      ?>
                  </span>
                        </div>
                        <?php
                        $t_id = 1;
                        $t_item = Price::findIdentity($t_id);
                        $t_path = $t_item -> getImg();
                        $n_path = "../../common/static/images/price/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <ul>
                        </ul>
                        <li><?= Html::a('More Details', ['site/show-price-details','price_id' => 1]) ?></li>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
              <span class="featured">
                  <?php
                  $t_id = 2;
                  $t_item = Price::findIdentity($t_id);
                  $t_class = $t_item -> getClass();
                  echo $t_class
                  ?>
              </span>
                        <h3 style="color: #65c600;">
                            <?php
                            $t_id = 2;
                            $t_item = Price::findIdentity($t_id);
                            $t_name = $t_item -> getItemName();
                            echo $t_name
                            ?>
                        </h3>
                        <div class="price">
                            <sup>
                                <?php
                                $t_id = 2;
                                $t_item = Price::findIdentity($t_id);
                                $t_currency = $t_item -> getCurrency();
                                echo $t_currency
                                ?>
                            </sup>
                            <?php
                            $t_id = 2;
                            $t_item = Price::findIdentity($t_id);
                            $t_price = $t_item -> getPrice();
                            echo $t_price
                            ?>
                            <span>
                      <?php
                      $t_id = 2;
                      $t_item = Price::findIdentity($t_id);
                      $t_measurement = $t_item -> getMeasurement();
                      $t_measure = "/ ".$t_measurement;
                      echo $t_measure
                      ?>
                  </span>
                        </div>
                        <?php
                        $t_id = 2;
                        $t_item = Price::findIdentity($t_id);
                        $t_path = $t_item -> getImg();
                        $n_path = "../../common/static/images/price/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <ul>
                        </ul>
                        <li><?= Html::a('More Details', ['site/show-price-details','price_id' => 2]) ?></li>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
              <span class="featured">
                  <?php
                  $t_id = 3;
                  $t_item = Price::findIdentity($t_id);
                  $t_class = $t_item -> getClass();
                  echo $t_class
                  ?>
              </span>
                        <h3 style="color: #ff901c;">
                            <?php
                            $t_id = 3;
                            $t_item = Price::findIdentity($t_id);
                            $t_name = $t_item -> getItemName();
                            echo $t_name
                            ?>
                        </h3>
                        <div class="price">
                            <sup>
                                <?php
                                $t_id = 3;
                                $t_item = Price::findIdentity($t_id);
                                $t_currency = $t_item -> getCurrency();
                                echo $t_currency
                                ?>
                            </sup>
                            <?php
                            $t_id = 3;
                            $t_item = Price::findIdentity($t_id);
                            $t_price = $t_item -> getPrice();
                            echo $t_price
                            ?>
                            <span>
                      <?php
                      $t_id = 3;
                      $t_item = Price::findIdentity($t_id);
                      $t_measurement = $t_item -> getMeasurement();
                      $t_measure = "/ ".$t_measurement;
                      echo $t_measure
                      ?>
                  </span>
                        </div>
                        <?php
                        $t_id = 3;
                        $t_item = Price::findIdentity($t_id);
                        $t_path = $t_item -> getImg();
                        $n_path = "../../common/static/images/price/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <ul>
                        </ul>
                        <li><?= Html::a('More Details', ['site/show-price-details','price_id' => 3]) ?></li>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="box">
              <span class="featured">
                  <?php
                  $t_id = 4;
                  $t_item = Price::findIdentity($t_id);
                  $t_class = $t_item -> getClass();
                  echo $t_class
                  ?>
              </span>
                        <h3 style="color: #ff0071;">
                            <?php
                            $t_id = 4;
                            $t_item = Price::findIdentity($t_id);
                            $t_name = $t_item -> getItemName();
                            echo $t_name
                            ?>
                        </h3>
                        <div class="price">
                            <sup>
                                <?php
                                $t_id = 4;
                                $t_item = Price::findIdentity($t_id);
                                $t_currency = $t_item -> getCurrency();
                                echo $t_currency
                                ?>
                            </sup>
                            <?php
                            $t_id = 4;
                            $t_item = Price::findIdentity($t_id);
                            $t_price = $t_item -> getPrice();
                            echo $t_price
                            ?>
                            <span>
                      <?php
                      $t_id = 4;
                      $t_item = Price::findIdentity($t_id);
                      $t_measurement = $t_item -> getMeasurement();
                      $t_measure = "/ ".$t_measurement;
                      echo $t_measure
                      ?>
                  </span>
                        </div>
                        <?php
                        $t_id = 4;
                        $t_item = Price::findIdentity($t_id);
                        $t_path = $t_item -> getImg();
                        $n_path = "../../common/static/images/price/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <ul>
                        </ul>
                        <li><?= Html::a('More Details', ['site/show-price-details','price_id' => 4]) ?></li>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>F.A.Q</h2>
                <p>俄乌冲突问答</p>
            </header>

            <div class="row">
                <div class="col-lg-6">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    <?php
                                        $faq = Faq::find()->where(['priority' => 1])->one();
                                        echo ($faq->question);
                                    ?>
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <?php
                                        $faq = Faq::find()->where(['priority' => 1])->one();
                                        echo ($faq->answer);
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                <?php
                                        $faq = Faq::find()->where(['priority' => 2])->one();
                                        echo ($faq->question);
                                ?>
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                <?php
                                        $faq = Faq::find()->where(['priority' => 2])->one();
                                        echo ($faq->answer);
                                ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                <?php
                                        $faq = Faq::find()->where(['priority' => 3])->one();
                                        echo ($faq->question);
                                ?>
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                <?php
                                        $faq = Faq::find()->where(['priority' => 3])->one();
                                        echo ($faq->answer);
                                ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">

                    <!-- F.A.Q List 2-->
                    <div class="accordion accordion-flush" id="faqlist2">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                <?php
                                        $faq = Faq::find()->where(['priority' => 4])->one();
                                        echo ($faq->question);
                                ?>
                                </button>
                            </h2>
                            <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                <?php
                                        $faq = Faq::find()->where(['priority' => 4])->one();
                                        echo ($faq->answer);
                                ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                <?php
                                        $faq = Faq::find()->where(['priority' => 5])->one();
                                        echo ($faq->question);
                                ?>
                                </button>
                            </h2>
                            <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                <?php
                                        $faq = Faq::find()->where(['priority' => 5])->one();
                                        echo ($faq->answer);
                                ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                <?php
                                        $faq = Faq::find()->where(['priority' => 6])->one();
                                        echo ($faq->question);
                                ?>
                                </button>
                            </h2>
                            <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                <?php
                                        $faq = Faq::find()->where(['priority' => 6])->one();
                                        echo ($faq->answer);
                                ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Gallery</h2>
                <p>俄乌冲突纪实</p>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">全部</li>
                        <li data-filter=".filter-equipment">武装</li>
                        <li data-filter=".filter-civilian">平民</li>
                        <li data-filter=".filter-battlefield">战场</li>
                    </ul>
                </div>
            </div>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-equipment">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 1;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/gallery/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 1;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 1;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                    <?php
                                    $t_id = 1;
                                    $t_picture = Gallery::findIdentity($t_id);
                                    $t_path = $t_picture -> getPath();
                                    $t_name = $t_picture -> getName();
                                    echo "<a href=$t_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                    ?>
                                </li>
                                <li><?= Html::a('more', ['site/show-gallery-details','gallery_id' => 1]) ?></li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-equipment">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 2;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/gallery/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 2;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 2;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                <?php
                                $t_id = 2;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_path = $t_picture -> getPath();
                                $t_name = $t_picture -> getName();
                                echo "<a href=$t_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                ?>
                                </li>
                                <li><?= Html::a('more', ['site/show-gallery-details','gallery_id' => 2]) ?></li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-equipment">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 3;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/gallery/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 3;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 3;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                <?php
                                $t_id = 3;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_path = $t_picture -> getPath();
                                $t_name = $t_picture -> getName();
                                echo "<a href=$t_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                ?>
                                </li>
                                <li><?= Html::a('more', ['site/show-gallery-details','gallery_id' => 3]) ?></li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-civilian">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 4;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/gallery/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 4;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 4;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                <?php
                                $t_id = 4;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_path = $t_picture -> getPath();
                                $t_name = $t_picture -> getName();
                                echo "<a href=$t_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                ?>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-civilian">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 5;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/gallery/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 5;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 5;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                <?php
                                $t_id = 5;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_path = $t_picture -> getPath();
                                $t_name = $t_picture -> getName();
                                echo "<a href=$t_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                ?>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-civilian">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 6;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/gallery/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 6;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 6;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                <?php
                                $t_id = 6;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_path = $t_picture -> getPath();
                                $t_name = $t_picture -> getName();
                                echo "<a href=$t_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                ?>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-battlefield">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 7;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/gallery/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 7;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 7;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                <?php
                                $t_id = 7;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_path = $t_picture -> getPath();
                                $t_name = $t_picture -> getName();
                                echo "<a href=$t_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                ?>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-battlefield">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 8;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/gallery/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 8;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 8;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                <?php
                                $t_id = 8;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_path = $t_picture -> getPath();
                                $t_name = $t_picture -> getName();
                                echo "<a href=$t_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                ?>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-battlefield">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 9;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/gallery/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 9;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 9;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                <?php
                                $t_id = 9;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_path = $t_picture -> getPath();
                                $t_name = $t_picture -> getName();
                                echo "<a href=$t_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                ?>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Comments</h2>
                <p>各国领导人态度</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <?php
                                $t_id = 1;
                                $t_motto = Motto::findIdentity($t_id);
                                $t_content = $t_motto -> getContent();
                                echo $t_content
                                ?>
                            </p>
                            <div class="profile mt-auto">
                                <?php
                                $t_id = 1;
                                $t_motto = Motto::findIdentity($t_id);
                                $t_path = $t_motto -> getImg();
                                echo "<img src=$t_path class='testimonial-img' alt=''>"
                                ?>
                                <h3>
                                    <?php
                                    $t_id = 1;
                                    $t_motto = Motto::findIdentity($t_id);
                                    $t_name = $t_motto -> getAuthorName();
                                    echo $t_name
                                    ?>
                                </h3>
                                <h4>
                                    <?php
                                    $t_id = 1;
                                    $t_motto = Motto::findIdentity($t_id);
                                    $t_identity = $t_motto -> getIdentity();
                                    echo $t_identity;
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <?php
                                $t_id = 2;
                                $t_motto = Motto::findIdentity($t_id);
                                $t_content = $t_motto -> getContent();
                                echo $t_content
                                ?>
                            </p>
                            <div class="profile mt-auto">
                                <?php
                                $t_id = 2;
                                $t_motto = Motto::findIdentity($t_id);
                                $t_path = $t_motto -> getImg();
                                echo "<img src=$t_path class='testimonial-img' alt=''>"
                                ?>
                                <h3>
                                    <?php
                                    $t_id = 2;
                                    $t_motto = Motto::findIdentity($t_id);
                                    $t_name = $t_motto -> getAuthorName();
                                    echo $t_name
                                    ?>
                                </h3>
                                <h4>
                                    <?php
                                    $t_id = 2;
                                    $t_motto = Motto::findIdentity($t_id);
                                    $t_identity = $t_motto -> getIdentity();
                                    echo $t_identity;
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <?php
                                $t_id = 3;
                                $t_motto = Motto::findIdentity($t_id);
                                $t_content = $t_motto -> getContent();
                                echo $t_content
                                ?>
                            </p>
                            <div class="profile mt-auto">
                                <?php
                                $t_id = 3;
                                $t_motto = Motto::findIdentity($t_id);
                                $t_path = $t_motto -> getImg();
                                echo "<img src=$t_path class='testimonial-img' alt=''>"
                                ?>
                                <h3>
                                    <?php
                                    $t_id = 3;
                                    $t_motto = Motto::findIdentity($t_id);
                                    $t_name = $t_motto -> getAuthorName();
                                    echo $t_name
                                    ?>
                                </h3>
                                <h4>
                                    <?php
                                    $t_id = 3;
                                    $t_motto = Motto::findIdentity($t_id);
                                    $t_identity = $t_motto -> getIdentity();
                                    echo $t_identity;
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <?php
                                $t_id = 4;
                                $t_motto = Motto::findIdentity($t_id);
                                $t_content = $t_motto -> getContent();
                                echo $t_content
                                ?>
                            </p>
                            <div class="profile mt-auto">
                                <?php
                                $t_id = 4;
                                $t_motto = Motto::findIdentity($t_id);
                                $t_path = $t_motto -> getImg();
                                echo "<img src=$t_path class='testimonial-img' alt=''>"
                                ?>
                                <h3>
                                    <?php
                                    $t_id = 4;
                                    $t_motto = Motto::findIdentity($t_id);
                                    $t_name = $t_motto -> getAuthorName();
                                    echo $t_name
                                    ?>
                                </h3>
                                <h4>
                                    <?php
                                    $t_id = 4;
                                    $t_motto = Motto::findIdentity($t_id);
                                    $t_identity = $t_motto -> getIdentity();
                                    echo $t_identity;
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <?php
                                $t_id = 5;
                                $t_motto = Motto::findIdentity($t_id);
                                $t_content = $t_motto -> getContent();
                                echo $t_content
                                ?>
                            </p>
                            <div class="profile mt-auto">
                                <?php
                                $t_id = 5;
                                $t_motto = Motto::findIdentity($t_id);
                                $t_path = $t_motto -> getImg();
                                echo "<img src=$t_path class='testimonial-img' alt=''>"
                                ?>
                                <h3>
                                    <?php
                                    $t_id = 5;
                                    $t_motto = Motto::findIdentity($t_id);
                                    $t_name = $t_motto -> getAuthorName();
                                    echo $t_name
                                    ?>
                                </h3>
                                <h4>
                                    <?php
                                    $t_id = 5;
                                    $t_motto = Motto::findIdentity($t_id);
                                    $t_identity = $t_motto -> getIdentity();
                                    echo $t_identity;
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Team</h2>
                <p>团队介绍</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="../../common/static/images/team/lyx.jpg" class="img-fluid" alt="">
                            <!-- <div class="social"> -->
                                <!-- <a href=""><i class="bi bi-twitter"></i></a> -->
                                <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                                <!-- <a href=""><i class="bi bi-instagram"></i></a> -->
                                <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                            <!-- </div> -->
                        </div>
                        <div class="member-info">
                            <h4>刘宇轩</h4>
                            <span>组长 · 2012677</span>
                            <p>负责团队的分工协调和进度把控，完成前后台模板的合并和微调工作，前后台新闻模块的实现，新闻筛选搜索</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="../../common/static/images/team/zjk.jpg" class="img-fluid" alt="">
                            <!-- <div class="social"> -->
                                <!-- <a href=""><i class="bi bi-twitter"></i></a> -->
                                <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                                <!-- <a href=""><i class="bi bi-instagram"></i></a> -->
                                <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                            <!-- </div> -->
                        </div>
                        <div class="member-info">
                            <h4>赵健坤</h4>
                            <span>组员 · 2010535</span>
                            <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="../../common/static/images/team/zxp.jpg" class="img-fluid" alt="">
                            <!-- <div class="social"> -->
                                <!-- <a href=""><i class="bi bi-twitter"></i></a> -->
                                <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                                <!-- <a href=""><i class="bi bi-instagram"></i></a> -->
                                <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                            <!-- </div> -->
                        </div>
                        <div class="member-info">
                            <h4>郑向鹏</h4>
                            <span>组员 · 2013649</span>
                            <p>负责完成了前台的各国领导人态度、俄乌战争相关图片展示、影响物价展示和后台的gallery表管理price表管理</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="../../common/static/images/team/bd.jpg" class="img-fluid" alt="">
                            <!-- <div class="social"> -->
                                <!-- <a href=""><i class="bi bi-twitter"></i></a> -->
                                <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                                <!-- <a href=""><i class="bi bi-instagram"></i></a> -->
                                <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                            <!-- </div> -->
                        </div>
                        <div class="member-info">
                            <h4>边笛</h4>
                            <span>组员 · 2012668</span>
                            <p>负责完成了前台与后台的用户登录、前台的用户注册以及后台的用户表User管理。</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Our Clients</h2>
                <p>Temporibus omnis officia</p>
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section><!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>A108 Adam Street,<br>New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->
