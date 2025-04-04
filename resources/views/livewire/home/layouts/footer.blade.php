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
                                @foreach ($menus as $menu)
                                    @if ($menu->type == 'wigetLabel_1')
                                        <li><a href="#">{{ $menu->title }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line">{{ $footer->wigetLabel_2 }}</a>
                            <ul class="links-ul">
                                @foreach ($menus as $menu)
                                    @if ($menu->type == 'wigetLabel_2')
                                        <li><a href="#">{{ $menu->title }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line">{{ $footer->wigetLabel_3 }}</a>
                            <ul class="links-ul">
                                @foreach ($menus as $menu)
                                    @if ($menu->type == 'wigetLabel_3')
                                        <li><a href="#">{{ $menu->title }}</a></li>
                                    @endif
                                @endforeach
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
                    <a href="{{ $namads->link_app1 }}">
                        <img src="{{ $namads->image_app1 }}" alt="address">
                        <img src="{{ $namads->image_app2 }}" alt="address">
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
                                <img src="storage/{{ $logo->image }}" style="width: 130px !important;" alt="badge">
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
