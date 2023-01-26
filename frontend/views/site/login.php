<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="#" class="sign-in-form">
                <h2 class="title">登录</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="用户名" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="密码" />
                </div>
                <input type="submit" value="立即登录" class="btn solid" />
                <p class="social-text">通过其他方式</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-qq"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-weixin"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-weibo"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-alipay"></i>
                    </a>
                </div>
            </form>
            <form action="#" class="sign-up-form">
                <h2 class="title">注册</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="用户名" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="邮箱" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="密码" />
                </div>
                <input type="submit" class="btn" value="立即注册" />
                <p class="social-text">通过其他方式</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-qq"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-weixin"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-weibo"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-alipay"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>加入我们</h3>
                <p>
                    加入我们，成为本站的一份子。
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    去注册
                </button>
            </div>
            <img src="../web/statics/assets/img/login/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>已有帐号？</h3>
                <p>
                    立即登录已有帐号，享受独家权益。
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    去登录
                </button>
            </div>
            <img src="../web/statics/assets/img/login/register.svg" class="image" alt="" />
        </div>
    </div>
</div>

<script type="text/javascript">
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
    });
</script>

<!--<div class="site-login">-->
<!--    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>Please fill out the following fields to login:</p>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!--            --><?php //$form = ActiveForm::begin(['id' => 'login-form']); ?>
<!---->
<!--                --><?php //= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<!---->
<!--                --><?php //= $form->field($model, 'password')->passwordInput() ?>
<!---->
<!--                --><?php //= $form->field($model, 'rememberMe')->checkbox() ?>
<!---->
<!--                <div style="color:#999;margin:1em 0">-->
<!--                    If you forgot your password you can --><?php //= Html::a('reset it', ['site/request-password-reset']) ?><!--.-->
<!--                    <br>-->
<!--                    Need new verification email? --><?php //= Html::a('Resend', ['site/resend-verification-email']) ?>
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    --><?php //= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<!--                </div>-->
<!---->
<!--            --><?php //ActiveForm::end(); ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
