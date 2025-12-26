@section('title', 'سطح دسترسی ها')
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 box-margin height-card">
                        <div class="card card-body">
                            <h4 class="card-title">افزودن سطح دسترسی</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form wire:submit.prevent="roleForm">
                                        <div class="form-group">
                                            <label for="title">عنوان دسترسی (لاتین):</label>
                                            <input wire:model.defer='title' type="text" class="form-control" id="title">
                                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="desc">توضیحات دسترسی:</label>
                                            <input wire:model.defer='desc' type="text" class="form-control" id="desc">
                                            @error('desc') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="permissions">سطح دسترسی:</label>
                                            <select class="form-control" multiple wire:model.lazy='selectedPermissions'>
                                                @foreach ($permissions as $permission)
                                                    <option value="{{ $permission->id }}">{{ $permission->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-outline-success mb-2 mr-2">
                                            <i class="fa fa-save"></i> ذخیره
                                        </button>

                                        @if (session()->has('message'))
                                            <div class="alert alert-success mt-2">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست سطح دسترسی ها</h4>
                                <hr>
                                <table class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>عنوان دسترسی</th>
                                            <th>توضیحات نقش</th>
                                            <th>سطح نقش</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td>{{ $permission->title }}</td>
                                                <td>{{ $permission->desc }}</td>
                                                <td>
                                                    @foreach ($permission->permissions as $permission)
                                                        <span class="badge badge-info">{{ $role->title }}</span>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon">
                                                        <i class="zmdi zmdi-edit zmdi-custom"></i>
                                                    </a>
                                                    <button wire:click='deleteRecord({{ $permission->id }})'
                                                        data-toggle="modal" data-target="#exampleModal"
                                                        class="action-icon"> <i
                                                            class="zmdi zmdi-delete zmdi-custom"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
