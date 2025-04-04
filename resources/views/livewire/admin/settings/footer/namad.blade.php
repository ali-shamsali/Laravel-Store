@section('title', 'نماد های سایت ')
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
                                                <li><a href="{{ route('admin.setting.footer.label') }}">برچسب ها</a>
                                                </li>
                                                <li class="active"><a href="{{ route('admin.setting.footer.social') }}">
                                                        شبکه های
                                                        اجتماعی </a></li>
                                                <li><a href="{{ route('admin.setting.footer.logo') }}">لوگو های فوتر</a>
                                                </li>
                                                <li><a href="{{ route('admin.setting.footer.menu') }}">منوی های
                                                        فوتر</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mail-body--area">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">نرم افزار 1</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='image_app1'>
                                        </div>
                                        <div class="col-2">
                                            <label class="col-form-label">لینک نرم افزار 1</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='link_app1'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">نرم افزار 2</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='image_app2'>
                                        </div>
                                        <div class="col-2">
                                            <label class="col-form-label">لینک نرم افزار 2</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" wire:model='link_app2'>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label class="col-form-label">اینماد</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" wire:model='enamad'>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success mb-3" wire:click='update()'><i
                                            class="fa fa-save mr-3"></i>ذخیره</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
