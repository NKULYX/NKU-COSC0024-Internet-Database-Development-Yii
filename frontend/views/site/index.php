<?php
use common\models\Faq;

/* @var $this yii\web\View */

use common\models\News;
use common\models\Gallery;
use common\models\Motto;
use common\models\Price;
use common\models\User;
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

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="news" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>最新新闻消息</p>
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


<!--    <!-- ======= Services Section ======= -->-->
<!--    <section id="services" class="services">-->
<!---->
<!--        <div class="container" data-aos="fade-up">-->
<!---->
<!--            <header class="section-header">-->
<!--                <h2>Services</h2>-->
<!--                <p>Veritatis et dolores facere numquam et praesentium</p>-->
<!--            </header>-->
<!---->
<!--            <div class="row gy-4">-->
<!---->
<!--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">-->
<!--                    <div class="service-box blue">-->
<!--                        <i class="ri-discuss-line icon"></i>-->
<!--                        <h3>Nesciunt Mete</h3>-->
<!--                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>-->
<!--                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">-->
<!--                    <div class="service-box orange">-->
<!--                        <i class="ri-discuss-line icon"></i>-->
<!--                        <h3>Eosle Commodi</h3>-->
<!--                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>-->
<!--                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">-->
<!--                    <div class="service-box green">-->
<!--                        <i class="ri-discuss-line icon"></i>-->
<!--                        <h3>Ledo Markt</h3>-->
<!--                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>-->
<!--                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">-->
<!--                    <div class="service-box red">-->
<!--                        <i class="ri-discuss-line icon"></i>-->
<!--                        <h3>Asperiores Commodi</h3>-->
<!--                        <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>-->
<!--                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">-->
<!--                    <div class="service-box purple">-->
<!--                        <i class="ri-discuss-line icon"></i>-->
<!--                        <h3>Velit Doloremque.</h3>-->
<!--                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>-->
<!--                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">-->
<!--                    <div class="service-box pink">-->
<!--                        <i class="ri-discuss-line icon"></i>-->
<!--                        <h3>Dolori Architecto</h3>-->
<!--                        <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>-->
<!--                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--    </section><!-- End Services Section -->-->

    <!-- ======= Portfolio Section ======= -->
    <section id="gallery" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
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
    <section id="comments" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
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

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>国际商品物价</p>
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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>开发团队</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="../../common/static/images/team/lyx.jpg" class="img-fluid" alt="">
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

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>网站数据统计</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-clock"></i>
                        <div>
                            <span id="sitetime"></span>
                            <p>运行时长</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-layout-text-sidebar-reverse" style="color: #ee6c20;"></i>
                        <?php $news_num = News::find()->count();?>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=$news_num?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>新闻数量</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-graph-up" style="color: #15be56;"></i>
                        <?php $views_num = News::find()->sum('news_views')?>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=$views_num?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>浏览统计</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <?php $users_num = User::find()->count();?>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=$users_num?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>活跃用户</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

</main><!-- End #main -->

<script language=javascript>
    function siteTime() {
        window.setTimeout("siteTime()", 1000);
        var seconds = 1000;
        var minutes = seconds * 60;
        var hours = minutes * 60;
        var today = new Date();
        var todayYear = today.getFullYear();
        var todayMonth = today.getMonth() + 1;
        var todayDate = today.getDate();
        var todayHour = today.getHours();
        var todayMinute = today.getMinutes();
        var todaySecond = today.getSeconds();
        var t1 = Date.UTC(2023, 2, 1, 0, 0, 0);
        var t2 = Date.UTC(todayYear, todayMonth, todayDate, todayHour, todayMinute, todaySecond);
        var diff = t2 - t1;
        var diffHours = Math.floor((diff) / hours);
        var diffMinutes = Math.floor((diff - diffHours * hours) / minutes);
        var diffSeconds = Math.floor((diff - diffHours * hours - diffMinutes * minutes) / seconds);
        document.getElementById("sitetime").innerHTML = diffHours + " h " + diffMinutes + " m " + diffSeconds + " s ";
    }
    siteTime();
</script>
