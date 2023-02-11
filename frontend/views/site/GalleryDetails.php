<?php

/**
 * Team: 明天上线队
 * Created by 郑向鹏.
 * 武器详情展示模块
 */

/* @var $this \yii\web\View */
/* @var $model Gallery */

use yii\helpers\Html;
use common\models\Gallery;

$this->title = 'Gallery Details';
?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Introduction</li>
            </ol>
            <h2>Gallery Details</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="<?="../../common/static/images/gallery/" . $model->path?>" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Information</h3>
                        <ul>
                            <li><strong>名称: </strong>
                                <?=$model->getDetails()?>
                            </li>
                            <li><strong>首次亮相: </strong>
                                <?=$model->getGTime()?>
                            </li>
                            <li><strong>总重量: </strong>
                                <?=$model->getWeight()?>
                            </li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>
                            <?=$model->getTitle()?>
                        </h2>
                        <p>
                            <?=$model->getIntroduction()?>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
