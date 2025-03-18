@section('title', 'برچسب های فوتر')
<div>
    <div class="container-fluid">
        <div class="inbox-area">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-sm-flex">
                                <div class="mail-side-menu mb-30">
                                    <div class="ibox-content mailbox-content">
                                        <div class="file-manager clearfix">
                                            <!-- Title -->
                                            <ul class="folder-list">
                                                <li class="active"><a
                                                        href="{{ route('admin.setting.footer.label') }}">برچسب ها</a>
                                                </li>
                                                <li><a href="{{ route('admin.setting.footer.label') }}">برچسب ها</a>
                                                </li>
                                                <li><a href="{{ route('admin.setting.footer.social') }}"> شبکه های
                                                        اجتماعی </a></li>
                                                <li><a href="{{ route('admin.setting.footer.logo') }}">لوگو های فوتر</a>
                                                </li>
                                                <li class="active"><a
                                                        href="{{ route('admin.setting.footer.menu') }}">منوی های
                                                        فوتر</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mail-body--area">
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">متن برگشت به بالا</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='upLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر فوتر اول</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='wigetLabel_1'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر فوتر دوم</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='wigetLabel_2'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر فوتر سوم</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='wigetLabel_3'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر خبرنامه</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='rssLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر شبکه های اجتماعی</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='socialLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر پشتیبانی</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='supportLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر شماره تلفن</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='phoneLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر آدرس</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='addressLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر ایمیل</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='emailLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر درباره فروشگاه</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='aboutheadLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">متن درباره فروشگاه</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='aboutbodyLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">متن کپی رایت</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='copyright'>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success mb-3"
                                        wire:click='update()'><i class="fa fa-save mr-3"></i>ذخیره</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
