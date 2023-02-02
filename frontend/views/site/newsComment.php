<?php

/* @var $this yii\web\View */
/* @var $model News */

use common\models\News;
use yii\helpers\Html;
use \common\models\NewsSource;
use \common\models\NewsComment;

$this->title = 'My Yii Application';
?>

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
    <?= Html::beginForm('@web/index.php?r=site/add-news-comment') ?>
        <div class="row">
            <div class="col form-group">
                <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
            </div>
        </div>
        <input type="hidden" name="news_id" value="<?=$model->news_id?>">
        <input type="hidden" name="user_id" value="1">
        <button type="submit" class="btn btn-primary">Post Comment</button>
    <?= Html::endForm() ?>

</div>
