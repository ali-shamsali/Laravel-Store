@section('title', 'گزارشات سیستم')
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 box-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2">گزارشات سیستمی</h4>
                        <hr>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
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
                                <tr>
                                    <td>نام کاربری</td>
                                    <td>سیستم</td>
                                    <td>شرکت</td>
                                    <td>35</td>
                                    <td>1398/8/15</td>
                                    <td>
                                        <div class="badge badge-primary">ویرایش</div>
                                        <div class="badge badge-info">دیگر</div>
                                        <div class="badge badge-danger">حذف</div>
                                        <div class="badge badge-success">ایجاد</div>
                                        <div class="badge badge-warning">دیگر</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div>
</div>
