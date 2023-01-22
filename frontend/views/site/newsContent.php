<?php

/* @var $this yii\web\View */
/* @var $model News */

use common\models\News;
use yii\helpers\Html;
use \common\models\NewsSource;
use \common\models\NewsComment;

$this->title = 'My Yii Application';
?>

<div class="col-lg-8 entries">
    <article class="entry entry-single">
        <div class="entry-img">
            <img src="<?="../../common/static/images/news/" . $model->news_photo?>" alt="" class="img-fluid">
        </div>
        <h2 class="entry-title">
            <a><?=$model->news_title?></a>
        </h2>
        <div class="entry-meta">
            <ul>
                <li class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <a><?=$model->news_source?></a>
                </li>
                <li class="d-flex align-items-center">
                    <i class="bi bi-clock"></i>
                    <a><?=$model->news_date?></a>
                </li>
                <li class="d-flex align-items-center">
                    <i class="bi bi-chat-dots"></i>
                    <a><?=$model->getNewsCommentNum()?></a>
                </li>
            </ul>
        </div>

        <div class="entry-content">
            <?php $news_content = $model->getNewsContent() ?>
            <?php foreach ($news_content as $content):?>
                <p style="font-size: 15px"><?=$content?></p>
            <?php endforeach;?>
        </div>

        <div class="entry-footer">
            <i class="bi bi-folder"></i>
            <ul class="cats">
                <li><a href="#">Business</a></li>
            </ul>

            <i class="bi bi-tags"></i>
            <ul class="tags">
                <li><a href="#">Creative</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
            </ul>
        </div>

    </article><!-- End blog entry -->

    <div class="blog-author d-flex align-items-center">
        <?php $news_source = $model->getNewsSource()?>
        <img src="<?="../../common/static/images/news_source/" . $news_source->source_photo ?>" class="rounded-circle float-left" alt="">
        <div>
            <h4><?=$news_source->source_name?></h4>
            <div class="social-links">
                <a href="<?=$news_source->source_twitter?>"><i class="bi bi-twitter"></i></a>
                <a href="<?=$news_source->source_facebook?>"><i class="bi bi-facebook"></i></a>
                <a href="<?=$news_source->source_instagram?>"><i class="biu bi-instagram"></i></a>
            </div>
            <p><?=$news_source->source_introduction?></p>
        </div>
    </div><!-- End blog author bio -->

    <div class="blog-comments">

        <h4 class="comments-count" style="font-size: 24px"><?=$model->getNewsCommentNum()?> Comments</h4>

        <?php $news_comments = $model->getNewsComments()->all(); ?>
        <?php foreach ($news_comments as $comment):?>
            <div class="comment">
                <div class="d-flex">
                    <div class="comment-img"><img src="../../common/static/images/users/default1.png" alt=""></div>
                    <div>
                        <?php $user = $comment->getCommentUser()->one(); ?>
                        <h5 style="font-size: 20px"><a><?=$user->username?></a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time style="font-size: 16px"><?=$comment->comment_time?></time>
                        <p style="font-size: 15px">
                            <?=$comment->comment_content?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>

        <div id="comment-2" class="comment">
            <div class="d-flex">
                <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                <div>
                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                        Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                    </p>
                </div>
            </div>

            <div id="comment-reply-1" class="comment comment-reply">
                <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                    <div>
                        <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                            Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                            Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                            Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                        </p>
                    </div>
                </div>

                <div id="comment-reply-2" class="comment comment-reply">
                    <div class="d-flex">
                        <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                        <div>
                            <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                            <time datetime="2020-01-01">01 Jan, 2020</time>
                            <p>
                                Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                            </p>
                        </div>
                    </div>

                </div><!-- End comment reply #2-->

            </div><!-- End comment reply #1-->

        </div><!-- End comment #2-->

        <div class="reply-form">
            <h4>Leave a Reply</h4>
            <p>Your email address will not be published. Required fields are marked * </p>
            <form action="">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                        <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <input name="website" type="text" class="form-control" placeholder="Your Website">
                    </div>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Post Comment</button>

            </form>

        </div>

    </div><!-- End blog comments -->

</div><!-- End blog entries list -->