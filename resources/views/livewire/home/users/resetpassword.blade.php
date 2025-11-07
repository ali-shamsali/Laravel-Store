<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="{{ route('home.home') }}" class="logo-account">
                    <img src="{{ asset('home/images/logo-login.png') }}" alt="logo">
                </a>

                <div class="message-light">
                    <div class="massege-light text-center">
                        برای شماره {{ $user->mobile }} کد بازیابی ارسال شده است. کد و رمز جدید را وارد کنید.
                    </div>

                    <form wire:submit.prevent="resetPassword" class="mt-4">
                        <div class="form-account">
                            <div class="form-account-title">کد تأیید را وارد کنید</div>
                            <div class="form-account-row">
                                <div class="lines-number-input">
                                    <input type="text" maxlength="1" class="line-number-account" wire:model.defer="code_input.0">
                                    <input type="text" maxlength="1" class="line-number-account" wire:model.defer="code_input.1">
                                    <input type="text" maxlength="1" class="line-number-account" wire:model.defer="code_input.2">
                                    <input type="text" maxlength="1" class="line-number-account" wire:model.defer="code_input.3">
                                    <input type="text" maxlength="1" class="line-number-account" wire:model.defer="code_input.4">
                                </div>
                            </div>

                            <div class="form-account-title mt-3">رمز جدید</div>
                            <div class="form-account-row">
                                <input type="password" class="form-control" wire:model.defer="password" placeholder="رمز جدید">
                            </div>

                            <div class="form-account-title mt-2">تکرار رمز جدید</div>
                            <div class="form-account-row">
                                <input type="password" class="form-control" wire:model.defer="password_confirmation" placeholder="تکرار رمز جدید">
                            </div>
                        </div>

                        @if($message)
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @endif

                        <div class="form-account-row mt-3">
                            <button type="submit" class="btn btn-primary w-100">تغییر رمز</button>
                        </div>
                    </form>

                    <div class="form-account-row text-center mt-2">
                        <a href="{{ route('login') }}">بازگشت به ورود</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
