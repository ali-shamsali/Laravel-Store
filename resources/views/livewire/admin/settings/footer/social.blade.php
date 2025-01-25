@section('title',"شبکه های اجتماعی")
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
                                                <li><a href="{{ route('admin.setting.footer.label') }}">برچسب ها</a></li>
                                                <li class="active"><a href="{{ route('admin.setting.footer.social') }}"> شبکه های اجتماعی  </a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mail-body--area">
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">شبکه اجتماعی 1</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='Text_social_1'>
                                        </div>
                                        <div class="col-2">
                                            <label class="col-form-label">لینک شبکه اجتماعی 1</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='Link_social_1'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">شبکه اجتماعی 2</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='Text_social_2'>
                                        </div>
                                        <div class="col-2">
                                            <label class="col-form-label">لینک شبکه اجتماعی 2</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='Link_social_2'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">شبکه اجتماعی 3</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='Text_social_3'>
                                        </div>
                                        <div class="col-2">
                                            <label class="col-form-label">لینک شبکه اجتماعی 3</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='Link_social_3'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">شبکه اجتماعی 4</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='Text_social_4'>
                                        </div>
                                        <div class="col-2">
                                            <label class="col-form-label">لینک شبکه اجتماعی 4</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='Link_social_4'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">تلفن</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='Text_phone'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">ایمیل</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='Text_email'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">آدرس</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control"  wire:model='Text_address' >
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
