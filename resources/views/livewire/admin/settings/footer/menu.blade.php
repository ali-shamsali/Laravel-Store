@section('title', 'منو فوتر')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="mail-side-menu mb-30">
                        <div class="ibox-content mailbox-content">
                            <div class="file-manager clearfix">
                                <!-- Title -->
                                <ul class="folder-list">
                                    <li><a href="{{ route('admin.setting.footer.label') }}">برچسب ها</a></li>
                                    <li><a href="{{ route('admin.setting.footer.social') }}"> شبکه های اجتماعی </a></li>
                                    <li><a href="{{ route('admin.setting.footer.logo') }}">لوگو های فوتر</a></li>
                                    <li class="active"><a href="{{ route('admin.setting.footer.menu') }}">منوی های
                                            فوتر</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 box-margin height-card">
                        <div class="card card-body">
                            <h4 class="card-title">افزودن لوگو</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form role="form" wire:submit.prevent='SaveMenu'>
                                        @include('errors.error')
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان منو:</label>
                                            <input type="text" wire:model='title' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">جایگاه منو:</label>
                                            <select class="form-control" wire:model='type' style="width: 100%;">
                                                <option value="wigetLabel_1">ستون اول فوتر</option>
                                                <option value="wigetLabel_2">ستون دوم فوتر</option>
                                                <option value="wigetLabel_3">ستون سوم فوتر</option>
                                            </select>
                                        </div>

                                        <div class="checkbox checkbox-primary d-inline">
                                            <input type="checkbox" wire:model='isActive' name="checkbox-p-1"
                                                id="checkbox-p-1" checked="">
                                            <label for="checkbox-p-1" class="cr">فعال</label>
                                        </div>
                                        <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                            style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست منو ها</h4>
                                <hr>

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>عنوان منو</th>
                                            <th>جایگاه</th>
                                            <th>وضعیت</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <input type="text" class="form-control my-2" placeholder="جستجو..."
                                        wire:model.live.debounce.300ms='search'>
                                    <tbody>
                                        @foreach ($menus as $menu)
                                            <tr>
                                                <td>{{ $menu->title }}</td>
                                                <td>
                                                    @switch($menu->type)
                                                        @case("wigetLabel_1")
                                                        {{ "ستون اول "}}
                                                        @break

                                                        @case("wigetLabel_2")
                                                        {{ "ستون دوم "}}
                                                        @break

                                                        @case("wigetLabel_3")
                                                        {{ "ستون سوم "}}
                                                        @break

                                                        @default
                                                    @endswitch
                                                </td>
                                                <td>
                                                    @if ($menu->isActive == 1)
                                                        <span class="badge badge-success">فعال</span>
                                                    @else
                                                        <span class="badge badge-danger">غیرفعال</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="action-icon"> <i
                                                            class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                    <button wire:click='deletelogo({{ $menu->id }})'
                                                        data-toggle="modal" data-target="#exampleModal"
                                                        class="action-icon"> <i
                                                            class="zmdi zmdi-delete zmdi-custom"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
                @include('livewire.admin.include.modal')
            </div>
        </div>
    </div>
</div>
