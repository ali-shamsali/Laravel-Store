@section('title', 'داشبورد')
<div>

    <div class="dashboard-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">نظرات تائید نشده</h4>
                            <div class="table-responsive" id=" ">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>نظردهنده</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2864</td>
                                            <td>81</td>
                                            <td>1،912.00 تومان</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" style="width: 82%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">گزارشات سیستمی</h5>
                            <div class="product-table-area">
                                <div class="table-responsive" id=" ">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>نام کاربر</th>
                                                <th>آی پی</th>
                                                <th>نوع عملیات</th>
                                                <th>شرح عملیات</th>
                                                <th>تاریخ انجام</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($logs as $log)
                                                <tr>
                                                    <td>{{ $log->user->name }}</td>
                                                    <td>{{ $log->ip }}</td>
                                                    <td>
                                                        @switch($log->actionType)
                                                            @case('insert')
                                                                <div class="badge badge-success">ایجاد</div>
                                                            @break

                                                            @case('update')
                                                                <div class="badge badge-primary">ویرایش</div>
                                                            @break

                                                            @case('delete')
                                                                <div class="badge badge-danger">حذف</div>
                                                            @break

                                                            @case('restore')
                                                                <div class="badge badge-info">بازگردانی</div>
                                                            @break

                                                            @default
                                                                <div class="badge badge-warning">عملیات نامشخص</div>
                                                        @endswitch
                                                    </td>
                                                    <td>{{ $log->desc }}</td>
                                                    <td>{{ $log->created_at }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-12 mb-3">
                    <div class="card bg-boxshadow full-height">
                        <div
                            class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">وضعیت سفارشات</h5>
                            <!-- Nav Tabs -->
                            <ul class="nav total-earnings nav-tabs mb-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link show" id="today-users-tab" data-toggle="tab" href="#today-users"
                                        role="tab" aria-controls="today-users" aria-selected="false">در حال
                                        پردازش</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-0 active" id="month-users-tab" data-toggle="tab"
                                        href="#month-users" role="tab" aria-controls="month-users"
                                        aria-selected="true">آماده ارسال</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="userList2">
                                <div class="tab-pane fade" id="today-users" role="tabpanel"
                                    aria-labelledby="today-users-tab">
                                    <div class="table-responsive" id=" ">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>شماره سفارش</th>
                                                    <th>نام خریدار</th>
                                                    <th>موبایل</th>
                                                    <th>مبلغ قابل پرداخت</th>
                                                    <th>تاریخ و ساعت</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="chat-img mr-2">
                                                                <img src="img/shop-img/best-4.png" alt="">
                                                            </div>
                                                            <div>
                                                                <span>تلفن تلفن</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2864</td>
                                                    <td>81</td>
                                                    <td>1،912.00 تومان</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success" style="width: 82%">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                824
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade active show" id="month-users" role="tabpanel"
                                    aria-labelledby="month-users-tab">
                                    <div class="table-responsive" id=" ">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>شماره سفارش</th>
                                                    <th>نام خریدار</th>
                                                    <th>موبایل</th>
                                                    <th>مبلغ قابل پرداخت</th>
                                                    <th>تاریخ و ساعت</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="chat-img mr-2">
                                                                <img src="img/shop-img/best-4.png" alt="">
                                                            </div>
                                                            <div>
                                                                <span>تلفن تلفن</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2864</td>
                                                    <td>81</td>
                                                    <td>1،912.00 تومان</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success" style="width: 82%">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                824
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 box-margin">
                    <div class="card code-table">
                        <div class="card-body pb-0">
                            <h5 class="card-title">کاربران جدید سایت</h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>نام</th>
                                            <th>موبایل</th>
                                            <th>ایمیل</th>
                                            <th>وضعیت موبایل</th>
                                            <th>نقش کاربری</th>
                                            <th>تاریخ ایجاد</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                شماره 2154
                                            </td>
                                            <td>
                                                8965482
                                            </td>
                                            <td>
                                                1398/5/8
                                            </td>
                                            <td>
                                                7523 تومان
                                            </td>
                                            <td><a href="#!" class="badge badge-success badge-pill">فعال</a>
                                            </td>
                                            <td>
                                                1400/05/02
                                            </td>
                                        </tr>
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
