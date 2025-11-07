<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="index.html" class="logo-account"><img src="{{ asset('home/images/logo-login.png') }}" alt="logo"></a>
                <span class="account-head-line" style="text-align: center">ورود به دیجی‌استور</span>
                <div class="content-account">
                    <form wire:submit.prevent="Loginform" id="login">
                        <label for="email-phone">شماره موبایل خود را وارد کنید</label>
                        <input type="text" id="email-phone" wire:model='mobile' class="input-email-account" placeholder="">
                        <a href="{{ route('forgot-password') }}" class="account-link-password">رمز خود را فراموش کرده ام</a>
                        <label for="password">رمز عبور</label>
                        <input type="password" id="password" wire:model='password' class="input-password" placeholder="">
                        <div class="parent-btn">
                            <button class="dk-btn dk-btn-info" type="submit">
                                ورود به دیجی استور
                                <i class="fa fa-sign-in sign-in"></i>
                            </button>
                        </div>
                        <div class="form-auth-row">
                            <label for="remember" class="ui-checkbox">
                                <input type="checkbox" value="1" name="login" checked="" id="remember">
                                <span class="ui-checkbox-check"></span>
                            </label>
                            <label for="remember" class="remember-me">مرا به خاطر داشته باش</label>
                        </div>
                    </form>
                </div>
                <div class="account-footer">
                    <span>کاربر جدید هستید؟</span>
                    <a href="{{ route('register') }}" class="btn-link-register">ثبت‌نام در دیجی‌استور</a>
                </div>
            </div>
        </div>
    </div>
</div>
