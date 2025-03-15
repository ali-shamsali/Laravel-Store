@section('title', 'سطل زباله لوگو')
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
                                    <li class="active"><a href="{{ route('admin.setting.footer.logo') }}">لوگو های
                                            فوتر</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-9 box-margin">
                        @include('errors.error')
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست لوگو های حذف شده</h4>


                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>تصویر</th>
                                            <th>عنوان لوگو</th>
                                            <th>جایگاه</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <input type="text"
                                        class="form-control my-2"
                                        placeholder="جستجو..."
                                        wire:model.live.debounce.300ms='search'
                                    >
                                    <tbody>
                                        @foreach ($logos as $logo)
                                            <tr>
                                                <td><img src="{{ asset('storage/' . $logo->image) }}" alt="" width="65px"> </td>
                                                <td>{{ $logo->title }}</td>
                                                <td>{{ $logo->type=="top" ?  'لوگوی بالای فوتر' : 'لوگوی پایین فوتر'}}</td>
                                                <td>
                                                    <button class="btn btn-success btn-sm" data-toggle="modal"
                                                    data-target="#exampleModal2" wire:click='IDlogo({{ $logo->id }})'>بازگردانی</button>
                                                    <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#exampleModal1" wire:click='IDlogo({{ $logo->id }})'>حذف</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $logos->links() }}
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