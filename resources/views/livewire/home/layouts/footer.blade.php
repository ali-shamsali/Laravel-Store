<div>
    <!--   Footer---------------------------->
    <footer>
        <div class="footer-jump">
            <a href="#">
                <span class="footer-jump-angle"><i class="fa fa-angle-up"></i>{{ $footer->upLabel }}</span>
            </a>
        </div>

        <div class="container">
            <div class="footer-inner-box">
                @foreach ($topLogoFooter as $logo)
                    <a href="#" class="footer-badge">
                        <img src="storage/{{ $logo->image }}" alt="badge">
                        <span class="item-feature">{{ $logo->title }}</span>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-12">
            <div class="middle-bar-footer">
                <div class="col-lg-6 col-xs-12 pull-right">
                    <div class="footer-links">
                        <div class="links-col">
                            <a href="#" class="head-line">{{ $footer->wigetLabel_1 }}</a>
                            <ul class="links-ul">
                                <li><a href="#">نحوه ثبت سفارش</a></li>
                                <li><a href="#">رویه ارسال سفارش</a></li>
                                <li><a href="#">شیوه‌های پرداخت</a></li>
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line">{{ $footer->wigetLabel_2 }}</a>
                            <ul class="links-ul">
                                <li><a href="#">پرسش یه پاسخ های متداول</a></li>
                                <li><a href="#">رویه های بازگرداندن کالا</a></li>
                                <li><a href="#">شرایط استفاده</a></li>
                                <li><a href="#">حریم خصوصی</a></li>
                                <li><a href="#">گزارش باگ</a></li>
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line">{{ $footer->wigetLabel_3 }}</a>
                            <ul class="links-ul">
                                <li><a href="#">اتاق خبر دیجی استور</a></li>
                                <li><a href="#">فروش در دیجی استور</a></li>
                                <li><a href="#">فرصت های شغلی</a></li>
                                <li><a href="#">تماس با دیجی استور</a></li>
                                <li><a href="#">درباره ما دیجی استور</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 pull-left">
                    <div class="footer-form">
                        <span class="newslitter-form">{{ $footer->rssLabel }}
                        </span>

                        <form action="#">
                            <input type="text" class="input-footer" placeholder="آدرس ایمیل خود را وارد کنید">

                            <button class="btn-footer-post">ارسال</button>
                        </form>
                    </div>

                    <div class="footer-social">
                        <span class="newslitter-form-social">{{ $footer->socialLabel }}</span>

                        <div class="social-links">
                            <a href="{{ $footer->Link_social_1 }}"><i class="{{ $footer->Text_social_1 }}"></i></a>
                            <a href="{{ $footer->Link_social_2 }}"><i class="{{ $footer->Text_social_2 }}"></i></a>
                            <a href="{{ $footer->Link_social_3 }}"><i class="{{ $footer->Text_social_3 }}"></i></a>
                            <a href="{{ $footer->Link_social_4 }}"><i class="{{ $footer->Text_social_4 }}"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="footer-address">
                <div class="footer-contact">
                    <ul>
                        <li>{{ $footer->supportLabel }}</li>
                        <li style="float:right">{{ $footer->phoneLabel }} : <a href="#"
                                class="phone-contact">{{ $footer->Text_phone }}
                            </a></li>
                        <li class="email-title">{{ $footer->emailLabel }} : <a
                                href="#">{{ $footer->Text_email }}</a></li>
                    </ul>
                </div>

                <div class="address-images">
                    <a href="#">
                        <img src="{{ asset('home/images/footer-img/1090a120.png') }}" alt="address">
                        <img src="{{ asset('home/images/footer-img/71abe5c9.png') }}" alt="address">
                    </a>
                </div>
            </div>
        </div>

        <div class="more-info">
            <div class="col-12">
                <div class="about-site">
                    <h1>{{ $footer->aboutheadLabel }}</h1>
                    <p>{{ $footer->aboutbodyLabel }}</p>
                    <div class="footer-inner-box">
                        @foreach ($bottomLogoFooter as $logo)
                            <a href="#" class="footer-badge">
                                <img src="storage/{{ $logo->image }}"
                                    style="width: 130px !important;" alt="badge">
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="copy-right-footer">
                    <p>
                        {{ $footer->copyright }}
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--   Footer---------------------------->
</div>
