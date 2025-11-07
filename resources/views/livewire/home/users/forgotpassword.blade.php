<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="{{ route('home.home') }}" class="logo-account">
                    <img src="{{ asset('home/images/logo-login.png') }}" alt="logo">
                </a>

                <div class="message-light">
                    <div class="massege-light text-center">
                        شماره موبایل خود را وارد کنید تا کد بازیابی برای شما ارسال شود.
                    </div>

                    <form wire:submit.prevent="sendCode" class="mt-4">
                        @csrf
                        <div class="form-account">
                            <div class="form-account-title">شماره موبایل</div>
                            <div class="form-account-row">
                                <div class="lines-number-input">
                                    <input type="text" name="mobile" wire:model.defer="mobile" class="line-number-account" placeholder="0912xxx2415" style="width: auto !important">
                                </div>
                            </div>
                        </div>

                        @if($message)
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @endif

                        <div class="form-account-row mt-3">
                            <button type="submit" class="btn btn-primary w-100">ارسال کد</button>
                        </div>
                    </form>

                    <div class="form-account-row text-center mt-2">
                        <a href="{{ route('login') }}">بازگشت به صفحه ورود</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
