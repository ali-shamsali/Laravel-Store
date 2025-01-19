@section('title',"برچسب های فوتر")
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
                                                <li class="{{ route('admin.setting.footer.label') ? 'active' : '' }}"><a href="{{ route('admin.setting.footer.label') }}"> <i class="fa fa-file-text-o"></i>برچسب ها</a></li>
                                                <li><a href="{{ route('home.home') }}"> <i class="ti-share"></i> ارسال پست الکترونیکی</a></li>
                                                <li><a href="#"> <i class="fa fa-certificate"></i> مهم</a></li>
                                                <li><a href="#"> <i class="fa fa-file-text-o"></i>پیش نویس <span class="badge badge-pill badge-warning inbox ml-2">3</span></a></li>
                                                <li><a href="#"> <i class="fa fa-trash-o"></i>سطل زباله <span class="badge badge-pill badge-danger inbox ml-2">4</span></a></li>
                                            </ul>
                                            <!-- Title -->
                                            <div class="categori-title mt-30">
                                                <h6 class="mb-3 primary-color-text">برچسب ها</h6>
                                            </div>
                                            <!-- List -->
                                            <ul class="category-list">
                                                <li><a href="#"> <i class="fa fa-circle text-navy"></i> مشتری</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-danger"></i> مهم</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-primary"></i> اجتماعی</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-info"></i> دیگر</a></li>
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
                                            <input type="text" class="form-control"  wire:model='wigetLabel_1'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر فوتر دوم</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"   wire:model='wigetLabel_2'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر فوتر سوم</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"   wire:model='wigetLabel_3'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر خبرنامه</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='rssLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر شبکه های اجتماعی</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='socialLabel'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر پشتیبانی</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='supportLabel' >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر شماره تلفن</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='phoneLabel' >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر آدرس</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='addressLabel' >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر ایمیل</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='emailLabel' >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تیتر درباره فروشگاه</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='aboutheadLabel' >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">متن درباره فروشگاه</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='aboutbodyLabel' >
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
                                    <button type="submit" class="btn btn-outline-success mb-3" wire:click='update()'><i class="fa fa-save mr-3"></i>ذخیره</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
