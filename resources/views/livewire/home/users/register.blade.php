@section('title', 'ثبت نام در دیجی‌استور')
<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="index.html" class="logo-account"><img src="{{ asset('home/images/logo-login.png') }}" alt="logo"></a>
                <span class="account-head-line">ثبت نام</span>
                <div class="content-account">
                    <div class="massege-light">ثبت نام تنها با شماره تلفن همراه امکان پذیر است.</div>
                    <form id="register">
                        <label for="phone">شماره موبایل خود را وارد کنید</label>
                        <input type="text" id="phone" class="input-email-account" placeholder="">
                        <label for="password">رمز عبور</label>
                        <input type="password" id="password" class="input-password" placeholder="">
                        <label for="password">تکرار رمز عبور</label>
                        <input type="password" id="password" class="input-password" placeholder="">
                        <div class="parent-btn">
                            <button class="dk-btn dk-btn-info">
                                ثبت نام به دیجی استور
                                <i class="mdi mdi-account-plus-outline sign-in"></i>
                            </button>
                        </div>
                        <div class="form-auth-row">
                            <label for="remember" class="ui-checkbox">
                                <input type="checkbox" value="1" name="login" checked="" id="remember">
                                <span class="ui-checkbox-check"></span>
                            </label>
                            <label for="remember" class="remember-me"><a href="#">حریم خصوصی</a> و <a
                                    href="#">شرایط
                                    قوانین</a>استفاده از سرویس های سایت دیجی‌استور را مطالعه نموده و با کلیه موارد آن
                                موافقم.</label>
                        </div>
                    </form>
                </div>

                <div class="account-footer">
                    <span>قبلا در دیجی‌استور ثبت‌نام کرده‌اید؟</span>
                    <a href="{{ route('login') }}" class="btn-link-register">وارد شویــد</a>
                </div>
            </div>
        </div>
    </div>
</div>
