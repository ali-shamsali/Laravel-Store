<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="{{ route('home.home') }}" class="logo-account"><img src="{{ asset('home/images/logo-login.png') }}" alt="logo"></a>
                <div class="message-light">
                    <div class="massege-light">
                        برای شماره همراه {{ $user->mobile }} کد تایید ارسال گردید
                        <br>
                        <a href="#" class="form-edit-number">
                            ویرایش شماره
                        </a>
                    </div>
                    <form wire:submit.prevent="verifyCode">
                        <div class="form-account">
                            <div class="form-account-title">کد تایید را وارد کنید</div>
                            <div class="form-account-row">
                                <div class="lines-number-input">
                                    <input type="text" class="line-number-account" maxlength="1" wire:model.defer="digit1">
                                    <input type="text" class="line-number-account" maxlength="1" wire:model.defer="digit2">
                                    <input type="text" class="line-number-account" maxlength="1" wire:model.defer="digit3">
                                    <input type="text" class="line-number-account" maxlength="1" wire:model.defer="digit4">
                                    <input type="text" class="line-number-account" maxlength="1" wire:model.defer="digit5">
                                </div>
                            </div>
                        </div>

                        <div class="form-account-row text-center mt-3">
                            <button type="submit" class="btn btn-primary">تأیید کد</button>
                        </div>

                        @if ($message)
                            <div class="alert alert-info mt-3">{{ $message }}</div>
                        @endif
                    </form>
                    <div class="form-account-row">دریافت مجدد کد تایید(
                        <p id="countdown-verify-end"><span class="day">0</span><span class="hour">0</span><span>:
                                2</span><span>58</span></p>
                        )
                    </div>
                </div>
                <div class="account-footer">
                    <span>کاربر جدید هستید؟</span>
                    <a href="register.html" class="btn-link-register">ثبت‌نام در دیجی‌استور</a>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
    <script src="{{ asset('home/js/countdown.min.js') }}"></script>
    @endsection
</div>
