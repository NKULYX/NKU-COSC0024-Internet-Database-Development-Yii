<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>


<section class="section">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>

            <!-- General Form Elements -->
            <?= Html::beginForm('@web/index.php?r=news/test','post',['enctype' => 'multipart/form-data']) ?>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="inputText" class="col-form-label">新闻标题</label>
                        <input type="text" class="form-control" name="news_title">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="inputPassword" class="col-form-label">新闻摘要</label>
                        <textarea class="form-control" style="height: 100px" name="news_abstract"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="inputPassword" class="col-form-label">新闻内容</label>
                        <textarea class="form-control" style="height: 100px" name="news_content"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="inputDate" class="col-form-label">新闻日期</label>
                        <input type="date" class="form-control" name="news_date">
                    </div>
                    <div class="col-md-4">
                        <label for="inputDate" class="col-form-label">新闻来源</label>
                        <div>
                            <select class="form-select" aria-label="Default select example" name="news_source">
                                <option selected>选择新闻来源</option>
                                <option value="1" onclick="alert('Hello');"><?=1 ?></option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="inputNumber" class="col-form-label">配图上传</label>
                        <input type="file" id="formFile" name="file">
                    </div>
                </div>
<!--                <div class="row mb-3">-->
<!--                    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>-->
<!--                    <div class="col-sm-10">-->
<!--                        <input type="time" class="form-control">-->
<!--                    </div>-->
<!--                </div>-->

                <div class="row mb-3">
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>

            <?= Html::endForm() ?>
            </form>
        </div>
    </div>



</section>
<!---->
<!--<div class="news-form">-->
<!---->
<!--    --><?php //$form = ActiveForm::begin(); ?>
<!---->
<!--    --><?php //= $form->field($model, 'news_title')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'news_abstract')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'news_content')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'news_photo')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'news_date')->textInput() ?>
<!---->
<!--    --><?php //= $form->field($model, 'news_source')->textInput(['maxlength' => true]) ?>
<!---->
<!--    <div class="form-group">-->
<!--        --><?php //= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
<!--    </div>-->
<!---->
<!--    --><?php //ActiveForm::end(); ?>
<!---->
<!--</div>-->
